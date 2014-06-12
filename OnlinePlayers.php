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
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 2){
                             $data->data['Text2'] = "[2/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 3){
                             $data->data['Text2'] = "[3/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 4){
                             $data->data['Text2'] = "[4/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 5){
                             $data->data['Text2'] = "[5/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 6){
                             $data->data['Text2'] = "[6/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 7){
                             $data->data['Text2'] = "[7/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 8){
                             $data->data['Text2'] = "[8/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 9){
                             $data->data['Text2'] = "[9/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 10){
                             $data->data['Text2'] = "[10/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 11){
                             $data->data['Text2'] = "[11/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 12){
                             $data->data['Text2'] = "[12/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 13){
                             $data->data['Text2'] = "[13/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 14){
                             $data->data['Text2'] = "[14/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 15){
                             $data->data['Text2'] = "[15/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 16){
                             $data->data['Text2'] = "[16/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 17){
                             $data->data['Text2'] = "[17/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 18){
                             $data->data['Text2'] = "[18/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 19){
                             $data->data['Text2'] = "[19/100]";
                             }
                             }
                             }
                             
                             elseif ($data->class === TILE_SIGN) {
             if ($data->data['Text1'] == "[OnlinePlayers]"){
             if(count($players) == 20){
                             $data->data['Text2'] = "[20/100]";
                             }
                             }
                             }
            
