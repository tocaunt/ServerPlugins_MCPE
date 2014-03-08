<?php
  /*
__PocketMine Plugin__
name=MyFirstPlugin
description=plugin
version=1
author=tocaunt
class=myfirstplugin
apiversion=9
*/

  class myfirstplugin implements Plugin
  {
    private $api;

    public function __construct(ServerAPI $api, $server = false)
    {
      $this->api = $api;
    }

    public function init()
    {
    }

    public function __destruct()
    {
    }
  }
