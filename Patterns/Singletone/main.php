<?php
include_once "Logger.php";
include_once "Configuration.php";
$log1 = Logger::getInstance();
$log1->writeLog("Message1");
$log1->writeLog("Message2");


$config = Configuration::getInstance();
$config->setValue('user','admin');

//....

$log2 = Logger::getInstance();
$log2->writeLog("Message1");
$log2->writeLog("Message2");


$config2 = Configuration::getInstance();
$config2->setValue('password','admin');


echo $config2->getValue('user');





