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
         if(strtolower($cmd->getName()) === "checkip"){
         if($sender->hasPermission("checkip.command"){
            
                
             if(!isset($args[0])){           
            $sender->sendMessage("§cUsage /CheckIP <player>");
        
         }
      
        if(strtolower($args[0]) == $name){
               $target = $this->getServer()->getPlayer($name);
                if($sender instanceof Player){
               $ip = $target->getAddress();
                $playername = $target->getName();
                $sender->sendMessage("§AShowing ".$playername."’s IP §9".$ip."");
                      }
               }
       }
}
