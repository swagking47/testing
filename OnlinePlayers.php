<?php

/*
__Pocketmine Plugin__
class=Online
name=OnlinePlayers
description=count how many online players there are on sign
author=SwagKing47
version=1
apiversion=12
*/
class Online implements plugin{

public function __construct(ServerAPI $api, $server = false){

$this->api = $api;

}

public function init(){
$this->api->event("tile.update", array($this, "eventHandler"));
}
public function eventHandler($data){
            
            if ($data->class === TILE_SIGN) {
             $players = $this->api->player->online();
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             $data->data["Text2"] = "[".count($players)."/100]";
                             
             }
            }
}
            public function __destruct() { }
}

                             
            
