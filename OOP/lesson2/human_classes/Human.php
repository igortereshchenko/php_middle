<?php


class Human
{
    protected $name;
    private $age;

    /**
     * Human constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function toString(){

        echo "Your name is ".$this->name." and age is ".$this->age;
    }

    private function privateFunction(){
        echo "privateFunction";

    }

    protected function protectedFunction(){
        echo "protectedFunction";

    }

}