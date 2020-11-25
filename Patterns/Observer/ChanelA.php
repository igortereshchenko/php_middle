<?php
include_once "Server.php";
class ChanelA extends Server
{
    public function getLatestNews()
    {
        return 'Chanel A news '.date('Y-m-d H:m:s');
    }
}