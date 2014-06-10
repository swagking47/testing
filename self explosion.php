<?php

/*
__PocketMine Plugin__
name=self explosion
description=explode your self
version=1
author=Swagking
class=Explode
apiversion=11,12,13
*/
class Explode implements Plugin
{
    private $api;

    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }

    public function init()
    {
    $this->api->addHandler("player.equipment.change", array($this, "EventHandler"));
    }
    
     public function EventHandler($data, $event)
    {
        switch($event)
        {
            case "player.equipment.change":

                if($data["item"]->getID() == 46){
                $explosion = new Explosion(new Position($data->x, ($data->y), $data->z, $data->level), 6);
			$explosion->explode();
			}
			}
			}
			public function __destruct(){
	
}
}
?>
