<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    protected $engine_type;
    protected $model;

    /**
     * Car constructor.
     * @param $engine_type
     * @param $model
     */
    public function __construct($passanger_count, $speed, $color,$engine_type, $model)
    {
        parent::__construct($passanger_count, $speed, $color);
        $this->engine_type = $engine_type;
        $this->model = $model;
    }

    public function toString()
    {
//        parent::toString(); // TODO: Change the autogenerated stub
        echo var_dump($this);
    }

    function stop()
    {
        echo "stop car";
    }

    public function CarStop(){

    }

    function next_gear()
    {
        echo "next_gear";
    }

    function previous_gear()
    {
        echo "previous_gear";
    }

    function profit_calculation()
    {
        echo "car profit calculation";
    }

    function turn_left()
    {
        echo "turn_left";
    }

    function turn_right()
    {
        echo "turn_right";
    }


}