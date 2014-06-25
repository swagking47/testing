<?php

/*
__Pocketmine Plugin__
class=Online
name=OnlinePlayersSign
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
$this->api->addHandler("tile.update",array($this,"eventHandler"));
$this->api->schedule(20,array($this,"UpdateSign"),array(),true); // once a second, or this will lag the server. TODO: move to andler of player.quit and player.spawn
}
public function eventHandler($data){
            $max = ServerAPI::request()->maxClients;
            if ($data->class === TILE_SIGN) {
               if ($data->data['Text1'] == "[OnlinePlayers]"){
           $players = $this->api->player->online();
               $data->data["Text2"] = "[".count($players)."/$max]";
                             
             }
            }
}
public function UpdateSign(){
            $max = ServerAPI::request()->maxClients;
            if(isset($this->sign)){
               $data->data["Text2"] = "[".count($players)."/$max]";         
}
}

            public function __destruct() { }
}          
