<?php
namespace Zonasky\Zona;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

//TODO: 1.0.5: add reload commands and whatnot

Class Core extends PluginBase {


  private function getscripts(string $scripts) : bool {
$this->getResourceFolder("scripts")->getChildren();
   return $scripts;
    
  }


  private function interpret(string $str, Array $args) : bool {
$errorScriptUnreadble = "ERROR: Your Script cannot be interpreted as it has a " . $errortype . " !";
  $plr = $this->getPlayer();
  $script = getscripts();
    $player = $this->str_replace("%player%", $plr, $script)
$broadcast = $this->str_replace("send new message to the server", $this->getServer()->broadcastMessage() , $script);

  
}


  }
  
