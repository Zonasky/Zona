<?php
namespace Zonasky\Zona;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

//TODO: 1.0.5: add reload commands and whatnot
// CODE REWRITE INCOMING
Class Core extends PluginBase {

  private function getscripts(string $scripts) : bool {
$this->getResourceFolder("scripts")->getChildren();
   return $scripts;
    
  }


  private function replace(string $string) : bool {
  return $this->str_replace()
  // for developers. to call this API: replace("%player%, $this->getPlayer(), $string);
}

private function player(string $code) : bool {
  return replace("%player%" , $this->getPlayer() , $code);
  }
  
