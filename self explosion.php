<?php
/*
__PocketMine Plugin__
 name=Self Explosion
 description=explode your self
 version=1
 author=Swagking
 class=SelfExplode
 apiversion=11,12,13
 */
class SelfExplode implements Plugin
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
    if ($data["item"]->getID() === 46) (new Explosion(new Position($data["player"]->entity->x, $data["player"]->entity->y, $data["player"]->entity->z, $data["player"]->level), 6))->explode();
  }
  public function __destruct() {
  }
}
