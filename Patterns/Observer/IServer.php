<?php

include_once "IClient.php";

interface IServer
{
    //method
    public function attach(IClient $client);
    public function detach(IClient $client);
    public function notify();


    //property
    public function getLatestNews();
}