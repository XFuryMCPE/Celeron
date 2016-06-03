<?php

namespace Celeron;

use pocketmine\event\Listener;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\utils\TextFormat;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->info(TF::GREEN."Celeron activated");
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onDisable(){
        $this->getLogger()->info(TF::RED."Celeron disabled");
    }

    public function onHurt(EntityDamageEvent $event){
        $player = $event->getEntity();
        if($event instanceof EntityDamageByEntityEvent){
            $damage = $event->getDamager();
            if($damage instanceof Player){
                if($damage->getInventory()->getItemInHand()->getId() === 367){
                    $player->sendTip("You have been harpooned.");
                    $damage->sendMessage("You hit" . $player->getName();
                }
            }
        }
    }
}
