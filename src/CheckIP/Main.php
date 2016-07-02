<?php
 
Namespace CheckIP;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listenener{

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
         if(strtolower($cmd->getName()) === "checkip"){
          $name = $args[0];
                $target = $this->getServer()->getPlayer($name);
                if($sender instanceof Player){
                if($args[0] === null){
                $sender->sendMessage("§cPlease use /checkip (player name)");
                return false;
                 
                  }

                  if($target === null){
               $sender->sendMessage("§cThat Player Is Not Online!");
                  return false;

              }

                $ip = $target->getAdress();
                $playername = $target->getName();
                $sender->sendMessage("§AShowing ".$playername."’s IP §9".$ip."");
