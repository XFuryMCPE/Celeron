<?php

namespace Celeron;

use pocketmine\plugin\Pluginbase;

class Main extends PluginBase implements Listner{
  public function onEnable(){
    $this->getLogger()->info(TF::BLUE."Celeron connected");
  }
}

