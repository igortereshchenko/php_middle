<?php

include_once "Singleton.php";

class Logger extends Singleton
{

    private $fileHandle;

    protected function __construct()
    {
        $this->fileHandle = fopen('C:/logs/log.txt','w');
    }

    public function writeLog($message){
        $data = date('Y-m-d H:m:s');
        fwrite($this->fileHandle, "[$data] $message \n");
    }

}