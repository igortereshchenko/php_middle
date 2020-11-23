<?php

require "classes/Car.php";
require "classes/Tram.php";
//
//
//$vehicle = new Vehicle(10,100,'red');
//$vehicle->toString();

$car = new Car(5,100,'blue','dizel','model 1');
$car->toString();
//
$tram = new Tram(100,60,'yellow',3,'rail type');
$tram->toString();

$movement_objects = [$car,$tram]; //IBeaks

foreach ($movement_objects as $obj){
    if ($obj instanceof IBeaks)
        $obj->stop()."\n";

}

foreach ($movement_objects as $obj){
    if ($obj instanceof Vehicle)
        echo $obj->getPassangerCount()."\n";
}


foreach ($movement_objects as $obj){
    if ($obj instanceof Vehicle)
        if  (!$obj instanceof Tram)
            echo $obj->turn_left();
}


