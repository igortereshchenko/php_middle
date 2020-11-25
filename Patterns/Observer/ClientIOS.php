<?php

include_once "IClient.php";
include_once "IServer.php";

class ClientIOS implements IClient
{

    public function update(IServer $server)
    {
        echo ">>>>>>".$server->getLatestNews()."<<<<<<";
    }

    public function getIP()
    {
        return "IOS ip";
    }
}