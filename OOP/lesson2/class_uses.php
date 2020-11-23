<?php

//require "classes/ClassA.php";
//require "classes/ClassB.php";

function upload_class_file($class_name){

    if ( ($class_name=='ClassA') or ($class_name=='ClassB') )

        include "classes/$class_name.php";
    else
        include "human_classes/$class_name.php";

}

spl_autoload_register(upload_class_file); //required

$a = new ClassA();
echo $a->a;

$a2 = new ClassA();
echo $a2->a;

$b = new ClassB();
echo $b->b;

$human = new Human();