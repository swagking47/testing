<?php

/*
__PocketMine Plugin__
name=PickaxeEffects
description=adds effects to the pickaxe
version=1
author=Swagboy 47
class=WhatEever
apiversion=11,12
*/
class WhatEever implements Plugin{
	private $api;
	private $pickaxe = true;
	private $kind = 278;
	private $effect = 1;
	private $explosion = 3;
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
	}

	public function init(){
		$this->api->console->register("Pickaxe", "pickaxe commands", array($this, "commandHandler"));
		$this->api->event("player.block.touch", array($this, "pickaxe"));
		$this->api->addHandler("entity.health.change", array($this, "damage"));
		}
		public function commandHandler($cmd, $params){
			switch(strtolower($cmd)){
			case "Pickaxe":
				if($params[0] == "enable"){
                  if($this->pickaxe === true){
                     $issuer->sendChat("[Pickaxe] Pickaxe is already enabled!");
                  }
                  if($this->pickaxe === false){
                     $issuer->sendChat("[Pickaxe] Pickaxe is enabled!");
                     $this->pickaxe = true;
                }
                }
			if($params[0] == "disable"){
                  if($this->pickaxe === false){
                     $issuer->sendChat("[Pickaxe] Pickaxe is already disabled!");
                  }
                  if($this->pickaxe === true){
                     $issuer->sendChat("[Pickaxe] Pickaxe is now disabled!");
                     $this->pickaxe = false;
                }
                }
				if($params[0] === "kind"){
						if($params[1] === "diamond"){
							if($this->kind === 278){
							$issuer->sendChat("[Pickaxe] Pickaxe is already set diamond!");	
							}
							if($this->kind === 257){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to diamond");
							 $this->kind = 278;
							}
							if($this->kind === 270){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to diamond");
							 $this->kind = 278;
							}
							if($this->kind === 274){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to diamond");
							 $this->kind = 278;
							}
							if($this->kind === 285){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to diamond");
							 $this->kind = 278;
							}
						}
						if($params[1] === "iron"){
						if($this->kind === 257){
							$issuer->sendChat("[Pickaxe] Pickaxe is already set iron!");	
							}
							if($this->kind === 278){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to iron!");
							 $this->kind = 257;
							}
							if($this->kind === 270){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to iron!");
							 $this->kind = 257;
							}
							if($this->kind === 274){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to iron!");
							 $this->kind = 257;
							}
							if($this->kind === 285){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to iron!");
							 $this->kind = 257;
							}
						}
						if($params[1] == "gold"){
						if($this->kind === 285){
							$issuer->sendChat("[Pickaxe] Pickaxe is already set gold!");	
							}
							if($this->kind === 257){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to gold!");
							 $this->kind = 285;
							}
							if($this->kind === 270){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to gold!");
							 $this->kind = 285;
							}
							if($this->kind === 274){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to gold!");
							 $this->kind = 285;
							}
							if($this->kind === 278){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to gold!");
							 $this->kind = 285;
							}
						}
						if($params[1] == "wood"){
                                                if($this->kind === 270){
							$issuer->sendChat("[Pickaxe] Pickaxe is already set wood!");	
							}
							if($this->kind === 285){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 270;
							}
							if($this->kind === 278){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 270;
							}
							if($this->kind === 274){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 270;
							}
							if($this->kind === 285){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 270;
							}
						}
						if($params[1] == "stone"){
							if($this->kind === 274){
							$issuer->sendChat("[Pickaxe] Pickaxe is already set wood!");	
							}
							if($this->kind === 278){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 274;
							}
							if($this->kind === 257){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 274;
							}
							if($this->kind === 270){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 274;
							}
							if($this->kind === 285){
							$issuer->sendChat("[Pickaxe] Pickaxe is set to wood!");
							 $this->kind = 274;
							}
						}
					}
				
				if($params[0] === "effect"){
				if($params[1] === "explosion"){
					if($this->effect === 1){
			                 $issuer->sendChat("[Pickaxe] Pickaxe effect is already set to explosion!");	
					}
					if($this->effect === 2){
			                 $issuer->sendChat("[Pickaxe] Pickaxe effect is set to explosion!");
			                 $this->effect === 1;
					}
				}
				if($params[1] === "smelt"){
				if($this->effect === 1){
			                 $issuer->sendChat("[Pickaxe] Pickaxe effect is already set to smelt!");	
					}
					if($this->effect === 2){
			                 $issuer->sendChat("[Pickaxe] Pickaxe effect is set to smelt!");
			                 $this->effect === smelting;
					}
				}
				}
					
					
				if($params[0] === "explosion"){
					$this->explosion === $params[1];
					 $issuer->sendChat("[Pickaxe]explosion size" . $params[1]);
				}
				
				}
			}
		
		public function pickaxe($data, $event){
			
			if($this->pickaxe === true and $this->effect === 2 and $this->kind === $data["item"]->getID()){
				(new Explosion($data["target"], $this->explosion))->explode();
			}
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
