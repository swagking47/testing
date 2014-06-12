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
             if(count($players) == 1){
                             $data->data['Text2'] = "[1/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 2){
                             $data->data['Text2'] = "[2/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 3){
                             $data->data['Text2'] = "[3/100]";
                             }
                             
            
                             
                             
                            
             
             elseif(count($players) == 4){
                             $data->data['Text2'] = "[4/100]";
                             }
                             
                             
                             
             
             elseif(count($players) == 5){
                             $data->data['Text2'] = "[5/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 6){
                             $data->data['Text2'] = "[6/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 7){
                             $data->data['Text2'] = "[7/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 8){
                             $data->data['Text2'] = "[8/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 9){
                             $data->data['Text2'] = "[9/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 10){
                             $data->data['Text2'] = "[10/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 11){
                             $data->data['Text2'] = "[11/100]";
                             }
                             
                             
                             
                             
             if(count($players) == 12){
                             $data->data['Text2'] = "[12/100]";
                             }
                             
                             
                             
                            
            elseif(count($players) == 13){
                             $data->data['Text2'] = "[13/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 14){
                             $data->data['Text2'] = "[14/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 15){
                             $data->data['Text2'] = "[15/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 16){
                             $data->data['Text2'] = "[16/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 17){
                             $data->data['Text2'] = "[17/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 18){
                             $data->data['Text2'] = "[18/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 19){
                             $data->data['Text2'] = "[19/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 20){
                             $data->data['Text2'] = "[20/100]";
                             }
                             
                             
             elseif(count($players) == 21){
                            $data->data['Text2'] = "[21/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 22){
                             $data->data['Text2'] = "[22/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 23){
                             $data->data['Text2'] = "[23/100]";
                             }
                             
            
                             
                             
                            
             
             elseif(count($players) == 24){
                             $data->data['Text2'] = "[24/100]";
                             }
                             
                             
                             
             
             elseif(count($players) == 25){
                             $data->data['Text2'] = "[25/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 26){
                             $data->data['Text2'] = "[26/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 27){
                             $data->data['Text2'] = "[27/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 28){
                             $data->data['Text2'] = "[28/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 29){
                             $data->data['Text2'] = "[29/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 30){
                             $data->data['Text2'] = "[30/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 31){
                             $data->data['Text2'] = "[31/100]";
                             }
                             
                             
                             
                             
             if(count($players) == 32){
                             $data->data['Text2'] = "[32/100]";
                             }
                             
                             
                             
                            
            elseif(count($players) == 33){
                             $data->data['Text2'] = "[33/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 34){
                             $data->data['Text2'] = "[34/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 35){
                             $data->data['Text2'] = "[35/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 36){
                             $data->data['Text2'] = "[36/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 37){
                             $data->data['Text2'] = "[37/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 38){
                             $data->data['Text2'] = "[38/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 39){
                             $data->data['Text2'] = "[39/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 40){
                             $data->data['Text2'] = "[40/100]";
                             }
                             
             elseif(count($players) == 41){
                             $data->data['Text2'] = "[41/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 42){
                             $data->data['Text2'] = "[42/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 43){
                             $data->data['Text2'] = "[43/100]";
                             }
                             
            
                             
                             
                            
             
             elseif(count($players) == 44){
                             $data->data['Text2'] = "[44/100]";
                             }
                             
                             
                             
             
             elseif(count($players) == 45){
                             $data->data['Text2'] = "[45/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 46){
                             $data->data['Text2'] = "[46/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 47){
                             $data->data['Text2'] = "[47/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 48){
                             $data->data['Text2'] = "[48/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 49){
                             $data->data['Text2'] = "[49/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 50){
                             $data->data['Text2'] = "[50/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 51){
                             $data->data['Text2'] = "[51/100]";
                             }
                             
                             
                             
                             
             if(count($players) == 52){
                             $data->data['Text2'] = "[52/100]";
                             }
                             
                             
                             
                            
            elseif(count($players) == 53){
                             $data->data['Text2'] = "[53/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 54){
                             $data->data['Text2'] = "[54/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 55){
                             $data->data['Text2'] = "[55/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 56){
                             $data->data['Text2'] = "[56/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 57){
                             $data->data['Text2'] = "[57/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 58){
                             $data->data['Text2'] = "[58/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 59){
                             $data->data['Text2'] = "[59/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 60){
                             $data->data['Text2'] = "[60/100]";
                             }
                             
                             
             elseif(count($players) == 61){
                            $data->data['Text2'] = "[61/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 62){
                             $data->data['Text2'] = "[62/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 63){
                             $data->data['Text2'] = "[63/100]";
                             }
                             
            
                             
                             
                            
             
             elseif(count($players) == 64){
                             $data->data['Text2'] = "[64/100]";
                             }
                             
                             
                             
             
             elseif(count($players) == 65){
                             $data->data['Text2'] = "[65/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 66){
                             $data->data['Text2'] = "[66/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 67){
                             $data->data['Text2'] = "[67/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 68){
                             $data->data['Text2'] = "[68/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 69){
                             $data->data['Text2'] = "[69/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 70){
                             $data->data['Text2'] = "[70/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 71){
                             $data->data['Text2'] = "[71/100]";
                             }
                             
                             
                             
                             
             if(count($players) == 72){
                             $data->data['Text2'] = "[72/100]";
                             }
                             
                             
                             
                            
            elseif(count($players) == 73){
                             $data->data['Text2'] = "[73/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 74){
                             $data->data['Text2'] = "[74/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 75){
                             $data->data['Text2'] = "[75/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 76){
                             $data->data['Text2'] = "[76/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 77){
                             $data->data['Text2'] = "[77/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 78){
                             $data->data['Text2'] = "[78/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 79){
                             $data->data['Text2'] = "[79/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 80){
                             $data->data['Text2'] = "[80/100]";
                             }
                             
                             elseif(count($players) == 81){
                             $data->data['Text2'] = "[81/100]";
                             }
                             
                             
             elseif(count($players) == 82){
                            $data->data['Text2'] = "[82/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 83){
                             $data->data['Text2'] = "[83/100]";
                             }
                             
                             
                             
                             
             
             elseif(count($players) == 84){
                             $data->data['Text2'] = "[63/100]";
                             }
                             
            
                             
                             
                            
             
             elseif(count($players) == 85){
                             $data->data['Text2'] = "[85/100]";
                             }
                             
                             
                             
             
             elseif(count($players) == 86){
                             $data->data['Text2'] = "[86/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 87){
                             $data->data['Text2'] = "[87/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 88){
                             $data->data['Text2'] = "[88/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 89){
                             $data->data['Text2'] = "[89/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 90){
                             $data->data['Text2'] = "[90/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 91){
                             $data->data['Text2'] = "[91/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 92){
                             $data->data['Text2'] = "[92/100]";
                             }
                             
                             
                             
                             
             if(count($players) == 93){
                             $data->data['Text2'] = "[93/100]";
                             }
                             
                             
                             
                            
            elseif(count($players) == 94){
                             $data->data['Text2'] = "[94/100]";
                             }
                             
                             
                             
                            
             elseif(count($players) == 95){
                             $data->data['Text2'] = "[95/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 96){
                             $data->data['Text2'] = "[96/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 97){
                             $data->data['Text2'] = "[97/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 98){
                             $data->data['Text2'] = "[98/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 99){
                             $data->data['Text2'] = "[99/100]";
                             }
                             
                             
                             
                             
             elseif(count($players) == 100){
                             $data->data['Text2'] = "[100/100]";
                             }
                             
                             
                             
             }
            }
}
            public function __destruct() { }
}

                             
            
