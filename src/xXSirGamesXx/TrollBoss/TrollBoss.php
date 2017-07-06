<?php
	
namespace xXSirGamesXx\TrollBoss;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener
use pocketmine\utils\TextFormat as C;	



class TrollBoss extends PluginBase implements Listener {
	
	public function onLoad() { 
		$this->getLogger()->info(C::AQUA . "Loading plugin TrollBossPE"); ]
	}
	
	public function onEnable() {  
		$this->getLogger()->info(C::AQUA . "TrollBossPE Enabled!"); 
	}
	
	public function onDisable() {
		$this->getLogger()->info(C::AQUA . "TrollBossPE disabled"); 
	}
}
