<?php

/*
__Pocketmine Plugin__
class=Online
Name=OnlinePlayers
Description=count how many online players there are on sign
Author=SwagKing47
Version=1
apiversion=12
*/
class Limit implements plugin{
Private $api;

public function __construct(ServerAPI $api, $server = false){

$this->api = $api;

}

public function init(){
$this->api->event("tile.update", array($this, "eventHandler"));
}
public function eventHandler($data){
            
            if ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             $data->data["Text2"] = "[".count($players)."/100]";
                             
             }
            }
}
            public function __destruct() { }
}

                             
            
