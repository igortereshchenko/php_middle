<?php
include_once "Server.php";
include_once "ClientAndroind.php";
include_once "ClientIOS.php";
include_once "ChanelA.php";
include_once "ChanelB.php";

$server = new Server();

$chanelA = new ChanelA();
$chanelB = new ChanelB();

$client_Android = new ClientAndroind();
$client_IOS = new ClientIOS();

//
//$server->attach($client_Android);
//$server->attach($client_IOS);
//
//$server->notify();
//
//$server->detach($client_IOS);
//
//$server->notify();

$chanelA->attach($client_Android);
$chanelB->attach($client_IOS);

$chanelA->notify();
$chanelB->notify();