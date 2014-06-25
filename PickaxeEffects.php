<?php

/*
__PocketMine Plugin__
name=PickaxeEffects
description=adds effects to the pickaxe
version=1
author=Swagboy 47
class=PickaxeEffect
apiversion=11,12
*/
class PickaxeEffect implements Plugin{
	private $api;
	private $CONFIG;
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
	}

	public function init(){
		$this->CONFIG = array(
			"Pickaxe" => 'enable',
			"kind" => '278',
			"effect" => 'explosion',
			"explosion" => '3',
		);
		if(is_file($this->api->plugin->configPath($this) . "config.yml")){
			$this->CONFIG = yaml_parse_file($this->api->plugin->configPath($this) . "config.yml");
		}
		$this->api->console->register("Pickaxe", "pickaxe commands", array($this, "commandHandler"));
		$this->api->event("player.block.touch", array($this, "pickaxe"));
		$this->api->addHandler("entity.health.change", array($this, "damage"));
		}
		public function commandHandler($cmd, $params){
			switch(strtolower($cmd)){
			case "Pickaxe":
				if($params[0] == "enable"){
					if(isset($this->CONFIG["Pickaxe"])){
						$this->CONFIG["Pickaxe"] = $params[0];
				 		return "[Pickaxe] the pickaxe effects have been enabled!";
				 	}
			 	}
				if($params[0] == "disable"){
					if(isset($this->CONFIG["Pickaxe"])){
					$this->CONFIG["Pickaxe"] = $params[0];
					return "[Pickaxe] the pickaxe effects have been disabled!";
					}
				}
				if($params[0] == "kind"){
					if(isset($this->CONFIG["kind"])){
						if($params[1] == "diamond"){
							$this->CONFIG["kind"] = 278;
							return "[Pickaxe] the pickaxe kind is set to diamond";
						}
						if($params[1] == "iron"){
							$this->CONFIG["kind"] = 257;
							return "[Pickaxe] the pickaxe kind is set to iron";
						}
						if($params[1] == "gold"){
							$this->CONFIG["kind"] = 285;
							return "[Pickaxe] the pickaxe kind is set to diamond";
						}
						if($params[1] == "wood"){
							$this->CONFIG["kind"] = 270;
							return "[Pickaxe] the pickaxe kind is set to wood";
						}
						if($params[1] == "stone"){
							$this->CONFIG["kind"] = 274;
							return "[Pickaxe] the pickaxe kind is set to stone";
						}
					}
				}
				if($params[0] == "effect"){
					if(isset($this->CONFIG["effect"])){
						if($params[1] == "explosion"){
							$this->CONFIG["kind"] = $params[1]; 
							return "[Pickaxe] the pickaxe kind is set to diamond";
						}
					}
				}
				if($params[0] == "explosion"){
					if(isset($this->CONFIG["explosion"])){
						$this->CONFIG["explosion"] = $params[1]; 
						return "[Pickaxe] the explosion size have been set to" . $params[1] ."!";
					}
				}
			}
		}
		public function pickaxe($data, $event){
			$config = $this->CONFIG;
			$this->enabled = $config["Pickaxe"];
			if($this->CONFIG["Pickaxe"] and $this->CONFIG["effect"] == "explosion" and $this->CONFIG["kind"] === $data["item"]->getID()){
				(new Explosion($data["block"], $this->explosion))->explode();
			}
		public function damage($data, $event){
			if($data["entity"]->class === ENTITY_PLAYER){
				$player = $data["entity"]->player;
				if($data["cause"] === "explosion"){
					return false;
				}
			}
		}
		public function __destruct(){
		}
}
