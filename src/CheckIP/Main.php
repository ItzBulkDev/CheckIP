<?php
 
Namespace CheckIP;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "checkip"){
           if(isset($args[0])){
              $name = $args[0];
                $player = $this->getServer()->getPlayer($name);
             $ip = $player->getAddress();
                 $playername = $player->getName();     
              $sender->sendMessage("§9".$playername."'s §aIP is §c".$ip."");

               }else{
                  $sender->sendMessage("§cUse /CheckIp <player>");

                 }
         }
}
