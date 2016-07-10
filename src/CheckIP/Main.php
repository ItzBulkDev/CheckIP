<?php
 
namespace CheckIP;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getServer()->getLogger()->info(TF::GOLD."Enabled!");
  }

  public function onDisable(){
    $this->getServer()->getLogger()->info(TF::RED."Disabled!");
  }

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if(strtolower($cmd->getName()) === "ip"){
      if(!($sender->hasPermission("check.ip.perm"))){
        $sender->sendMessage(TF::RED."You don't have permission to use the /ip command!");
        return;
      }
      if(isset($args[0])){
        $target = $this->getServer()->getPlayer($args[0]);
        if($target === null){
          $sender->sendMessage(TF::RED."That player isn't online!");
        }else{
          $ip = $target->getAddress();
          $sender->sendMessage(TF::GREEN.$target->getName()."'s IP is ".$ip."!");
        }
      }
    }
  }
}
