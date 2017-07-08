<?php
	
namespace xXSirGamesXx\TrollBoss;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;



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
			if ($sender instanceof Player) {
				if (!(isset($args[0]))) {
					if ($sender->hasPermission("troll.cmd")) {
						$sender->sendMessage(self::PREFIX . "Please type /troll help.");
						} else {
							$sender->sendMessage(self::PREFIX . self::NO_PERM);
							}
                    }
					$arg = array_shift($args);
                    switch ($arg) {
						case "help":
							if($sender->hasPermission("troll.cmd") || $sender->hasPermission("troll.cmd.help")){
								$sender->sendMessage(self::HELP_TOPPER);
								$sender->sendMessage("/trollboss help: show help pages");
								if(isset($args[1])){
									switch($args[1]){
										case "1":
											$sender->sendMessage(self::HELP_TOPPER);
											$sender->sendMessage("/trollboss help: show help pages");
										break;
									}
								}
							}else{
								$sender->sendMessage(self::PREFIX , self::NO_PERM);
							}
						break;
					}
			}else{
				$sender->sendMessage(self::PREFIX . "This command only works in-game, nothing personal.");
			}
				
				
		}
	}
}



