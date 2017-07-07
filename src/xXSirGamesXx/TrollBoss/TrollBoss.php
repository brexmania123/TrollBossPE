<?php
	
namespace xXSirGamesXx\TrollBoss;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;



class TrollBoss extends PluginBase implements Listener {
	const PREFIX = "[TrollBossPE] "; //oops typo
	const HELP_TOPPER = "========[TrollBossPE Help]========";
	const NO_PERM = "[TrollBossPE] You don't have permission to run this command!";
		
	public function onLoad() { 
		$this->getLogger()->info(C::AQUA . "Loading TrollBossPE by xXSirButterXx.."); 
	}
	
	public function onEnable() {  
		$this->getLogger()->info(C::AQUA . "TrollBossPE by xXSirButterXx Enabled!"); 
	}
	
	public function onDisable() {
		$this->getLogger()->info(C::AQUA . "TrollBossPE by xXSirButterXx Disabled!"); 
	}
	public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
		if($cmd->getName() == "trollboss"){
			if($sender->hasPermission("troll.cmd")){
				$sender->sendMessage(self::PREFIX . "Use /troll help for a list of commands");
			}else{
				$sender->sendMessage(self::NO_PERM);
			}
			if(isset($args[0]){
				if($sender->hasPermission("troll.cmd") || $sender->hasPermission("troll.cmd.help")){
					if(strtolower($args[0]) === "help"){
						$sender->sendMessage(self::HELP_TOPPER);
						$sender->sendMessage(self::PREFIX . "- /troll help: Shows help pages");
						if(isset($args[1]){
							if(strtolower($args[1]) === "1"){
								$sender->sendMessage(self::HELP_TOPPER);
								$sender->sendMessage(seld::PREFIX . "- /troll help: Shows help pages");
							}
							elseif(strtolower($args[1]) === "2"){
								$sender->sendMessage(self::HELP_TOPPER);
							}
							elseif(strtolower($args[1]) === "3"){
							}
						}   
					}
				}else{
					$sender->sendmessage(self::NO_PERM);
				}
			}
}
