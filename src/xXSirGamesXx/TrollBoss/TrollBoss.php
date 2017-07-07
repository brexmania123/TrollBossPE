<?php
	
namespace xXSirGamesXx\TrollBoss;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;



class TrollBoss extends PluginBase implements Listener {
	const PREFIX = "[TrollBossPE] "; //oops typo
	const HELP_TOPPER = "======[TrollBosPE Help]======";
	const NO_PERM = "[TrollBossPE] You don't have permission to run this command!";
		
	public function onLoad() { 
		$this->getLogger()->info(C::AQUA . "Loading TrollBossPE by xXSirButterXx.."); ]
	}
	
	public function onEnable() {  
		$this->getLogger()->info(C::AQUA . "TrollBossPE by xXSirButterXx Enabled!"); 
	}
	
	public function onDisable() {
		$this->getLogger()->info(C::AQUA . "TrollBossPE by xXSirButterXx Disabled!"); 
	}
	public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
		if($cmd->getName() == "trollboss"){
			if($sender->hasPermissions("troll.cmd")){
				$sender->sendMessage(self::PREFIX . "Please use /trollboss help <pagre number>");
			}
				if($args[0] === "help"){
					if($sender->hasPermission("troll.cmd") || $sender->hasPermission("troll.cmd.help")){
						if($args[1] === "1"){
							$sender->sendMessage(self::HELP_TOPPER);
							$sender->sendMessage("/trollboss help <help-number>");
						}
						elseif($args[1] === "2"){
						       $sender->sendMessage(self::HELP_TOPPER);
						}
						       
					}else{
						$sender->sendMessage(self::NO_PERM);
					}
						
				}
		
						
		}
	}
}
