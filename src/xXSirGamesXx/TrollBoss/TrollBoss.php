<?php
	
namespace xXSirGamesXx\TrollBoss;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;



class TrollBoss extends PluginBase implements Listener {
	const PREFIX = "[TrollBossPE] "
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
	}
}
