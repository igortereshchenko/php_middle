<?php

class Singleton{

    private static $instances = [];

    protected function __construct(){}

    public static function getInstance(){

        $class_name = static::class;

        if (!isset(self::$instances[$class_name])){

//            echo 'new instance created';
            self::$instances[$class_name] = new static();

        }


        return self::$instances[$class_name];
    }

}

//$obj1 = Singleton::getInstance();
//$obj2 = Singleton::getInstance();
//$obj3 = Singleton::getInstance();
//$obj4 = Singleton::getInstance();

