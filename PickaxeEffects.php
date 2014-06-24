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
        $this->api->addHandler("entity.health.change", array($this, "damage");
        define("EXPLOSION", $this->config->get('Explosion'));
        }
         public function CommandHandler($cmd, $params)
         {
        switch(strtolower($cmd))
        {
            case "Pickaxe":
            if($params[0] == "enable"){
            if(isset($this->CONFIG["Pickaxe"])){
            $this->CONFIG["Pickaxe"] = $params[0];
         return "[Pickaxe] the pickaxe effects have been enabled!"
         }
         }
        if($params[0] == "disable"){
        if(isset($this->CONFIG["Pickaxe"])){
        $this->CONFIG["Pickaxe"] = $params[0];
         return "[Pickaxe] the pickaxe effects have been disabled!"
         }
         }
          if($params[0] == "set"){
          
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
