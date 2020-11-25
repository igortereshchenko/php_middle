<?php

include_once "IServer.php";

interface IClient
{
    //method
    public function update(IServer $server);
    //property
    public function getIP();
}