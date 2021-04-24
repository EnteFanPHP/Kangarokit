<?php

declare(strict_types=1);

namespace Lightstrike;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onInteract(PlayerInteractEvent $event){
    $user = $event->getPlayer();
    $item = $event->getItem();
    if($item->getId() == Item::FIREWORKS){
      if($user->isSneaking() == true){
        $user->setMotion(new Vector3($user->x, 2, $user->z));
      } else {
        $user->sendMessage("§ePlease sneak for the Kangaroo Kit");
      }
    }
  }

}
