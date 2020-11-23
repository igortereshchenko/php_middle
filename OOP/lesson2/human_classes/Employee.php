<?php

include "Human.php";


class Employee extends Human
{

    protected $work;


    public function __construct($name, $age, $work)
    {
        parent::__construct($name, $age);

        $this->work = $work;
    }


    public function toString(){

        echo parent::toString(). " your work is ". $this->work;
        echo "name ".$this->name;
//        echo "age ".$this->age;  error private field


    }


}

$employee=new Employee("Bob", 18, 'student');
$employee->toString();

