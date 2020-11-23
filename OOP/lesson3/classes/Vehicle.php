<?php /** @noinspection ALL */

include_once "interfaces/IBeaks.php";
include_once "interfaces/IProfit.php";
include_once "interfaces/IGears.php";
include_once "interfaces/ITurns.php";

abstract class  Vehicle implements IBeaks, IGears,IProfit, ITurns
{
    protected $passanger_count;
    protected $speed;
    protected $color;

    /**
     * @return mixed
     */
    public function getPassangerCount()
    {
        return $this->passanger_count;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Vehicle constructor.
     * @param $passanger_count
     * @param $speed
     * @param $color
     */
    public function __construct($passanger_count, $speed, $color)
    {
        $this->passanger_count = $passanger_count;
        $this->speed = $speed;
        $this->color = $color;
    }

    public function toString(){
        echo var_dump($this);
    }


}

