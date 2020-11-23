<?php

class ClassA{


    public $a_value = "a_value \n";

    /**
     * ClassA constructor.
     * @param string $a_value
     */
    public function __construct(string $a_value)
    {
        $this->a_value = $a_value;
    }


    function __destruct(){
        echo "__destruct ClassA \n";
    }

    public function toString(){
        echo $this->a_value."\n";
    }
}

class ClassB{

    public $b_value = "b_value \n";

    /**
     * ClassB constructor.
     * @param string $b_value
     */
    public function __construct(string $b_value)
    {
        $this->b_value = $b_value;
    }


    function __destruct(){
        echo "__destruct ClassB \n";
    }

    public function toString(){
        echo $this->b_value."\n";
    }

    public function method1(){
        echo "method1";
    }
}



$obj_ClassA = new ClassA('smth value a');
echo $obj_ClassA->toString();


$obj_ClassB = new ClassB('smth value b');
echo $obj_ClassB->toString();


$class_name = 'ClassB';
$method_name = 'method1';

$obj = new $class_name('value');
$obj->$method_name();

