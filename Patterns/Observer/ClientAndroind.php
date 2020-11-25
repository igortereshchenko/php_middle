<?php

include_once "IClient.php";
include_once "IServer.php";
include_once "ChanelA.php";

class ClientAndroind implements IClient
{

    public function update(IServer $server)
    {
        if ($server instanceof  ChanelA)
        {
            $server->detach($this);
        }
        else
            echo $server->getLatestNews().'  android '."\n";
    }

    public function getIP()
    {
        return 'androind ip';
    }
}