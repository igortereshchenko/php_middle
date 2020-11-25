<?php

include_once "Server.php";
class ChanelB extends Server
{
    public function getLatestNews()
    {
        return 'Chanel B news '.date('Y-m-d H:m:s');
    }
}