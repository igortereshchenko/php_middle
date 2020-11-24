<?php

include_once "Singleton.php";

class Configuration extends Singleton
{
    private $configurationMap = [];

    public function getValue($key){
        return $this->configurationMap[$key];
    }

    public function setValue($key,$value){
        $this->configurationMap[$key] = $value;
    }
}