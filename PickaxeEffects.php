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
class PickaxeEffect implements Plugin
{
    private $api;

    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }

    public function init()
    {
        if(!file_exists($this->api->plugin->configPath($this) . "config.yml"))
        {
            $this->CONFIG = new Config($this->api->plugin->configPath($this) . "config.yml", CONFIG_YAML, array(
                "Pickaxe" => 'enable',
                "kind" => '278',
                "effect" => 'explosion',
                "explosion" => '3',
            ));
        }
        $this->api->console->register("Pickaxe", "pickaxe commands", array($this, "CommandHandler"));
        $this->api->event("player.block.touch", array($this, "Pickaxe"));
        $this->api->addHandler("entity.health.change", array($this, "damage"));
        }
         public function CommandHandler($cmd, $params)
         {
        switch(strtolower($cmd))
        {
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
        public function Pickaxe($event, $data){
           $this->enabled = $config["Pickaxe"];
           $this->effect = $config["effect"];
           $this->kind = $config["kind"];
           $this->explosion = $config["explosion"];
            if($this->enabled == enable && $this->effect == explosion && $data["item"]->getID() == $this->kind) (new Explosion(new Position($date["block"]->entity->x, $date["block"]->entity->y, $date["block"]->entity->z, $date["block"]->entity->level),  $this->explosion))->explode();
        }
        public function damage($event, $data){
            $player = $data["player"];
            if ($data['entity']->class !== ENTITY_PLAYER) return true;
		if ($data['cause'] == "explosion" && isset($player[$this->api->player->getByEID($data['entity']->eid)->username])) return false;
        }
         public function __destruct() {
  }
}
         
          
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
