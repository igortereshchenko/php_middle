<?php

include_once "IServer.php";
include_once "IClient.php";

class Server implements IServer
{

    private $clients;

    public function __construct()
    {
        $this->clients = [];
    }


    public function attach(IClient $client)
    {
        $this->clients[$client->getIP()] = $client;
    }

    public function detach(IClient $client)
    {
        unset( $this->clients[$client->getIP()] );
    }

    public function notify()
    {
        foreach ($this->clients as $client){
            $client->update($this);
        }
    }

    // property
    public function getLatestNews()
    {
        return 'Some news '.date('Y-m-d H:m:s');
    }
}