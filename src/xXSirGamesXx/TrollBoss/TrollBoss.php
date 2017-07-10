<?php
	
namespace xXSirGamesXx\TrollBoss;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\blosk\BlockIds;




class TrollBoss extends PluginBase implements Listener {
	public $prefix = (C::BLUE . "[" . C::AQUA . "TrollBoss" . C::GREEN . "PE" . C::BLUE . "]" . C::WHITE . " "); //oops typo
	public $HELP_TOPPER = (C::BLUE . "========[" . C::AQUA . "TrollBoss" . C::GREEN . "PE" . C::DARK_AQUA . " Help" . C::BLUE . "]========");
	public $NO_PERM = (C::RED . "You don't have permission to run this command!");
		
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
			//if ($sender instanceof Player) {
				if (!(isset($args[0]))) {
					if ($sender->hasPermission("troll.cmd")) {
						$sender->sendMessage($this->prefix . "Please type /troll help.");
						} else {
							$sender->sendMessage($this->prefix . $this->NO_PERM);
							}
                    }
					$arg = array_shift($args);
                    switch ($arg) {
						case "help":
							if($sender->hasPermission("troll.cmd") || $sender->hasPermission("troll.cmd.help")){
								$sender->sendMessage($this->HELP_TOPPER);
								$sender->sendMessage(C::AQUA . "/TrollBoss help" . C::GREEN . ":" . C::BLUE . " show help pages");
								$sender->sendMessage(C::AQUA . "/TrollBoss pumpkin <player>" . C::GREEN . ":" . C::BLUE . " Put a pumpkin on someones head!");
								if(isset($args[1])){
									switch($args[1]){
										case "1":
											$sender->sendMessage($this->HELP_TOPPER);
											$sender->sendMessage("/trollboss help: show help pages");
										break;
									}
								}
							}else{
								$sender->sendMessage($this->prefix . $this->NO_PERM);
							}
						break;
						
						case "pumpkin":
							if($sender->hasPermission("troll.cmd") || $sender->hasPermission("troll.cmd.pumpkin")){
								$sender->sendMessage($this->prefix . "Usage: /trollboss pumpkin <player>");
								if(isset($args[1])){
									$target = $this->getServer->getplayer($args[1]);
									if($target !== null){
										$sender->sendMessage($this->prefix . "You put a pumpkin on " . $target . "'s head!");
										$target->sendMessage("Whats this?");
									}else{
										$sender->sendMessage($this->prefix . "Player $args[1] does nt exist!");
									}
									
								}
																
							}else{
								//$sender->sendMessage($this->prefix . $this->NO_PERM);
							}
						break;

					}
			//}else{
				//$sender->sendMessage(self::PREFIX . "This command only works in-game, nothing personal.");
			//}
				
				
		}
	}
}



