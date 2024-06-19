<?php

namespace Zonasky\Zona;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

final class Reload {


  public function onCommand(CommandSender $sender, Array $args, string $string) : bool {
    switch 
      case "reload":
      if ($sender->hasPermission(Zona.reload)) {
$sender->sendMessage(TextFormat::GREEN . "[Reloading Scripts]");

      
    }
    else {
// stuff to do later
    }
    return true;
  }
  

}
