<?php

require_once 'Vehicle.php';

class Bike extends Vehicle
{
/*//////////////////////    ICI sont les propriétés de la classe    //////////////*/
    /**
     * @param int $nbSeats
     */
//    private $color;

//    private $currentSpeed;

    // [...]

    /**
     * @var integer
     */
//    public $nbSeats = 1;
    /**
     * @var integer
     */
//    public $nbWheels = 2;

/*//////////////////////    ICI sont les méthodes de la classe      //////////////*/

/*    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }
*/
/*
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
*/

/*    public function dump()
    {
        var_dump($this);
    }
*/
/*
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
*/
/*///////////////////////   ICI, méthode CONSTRUCTEUR      /////////////////*/
/*    public function __construct(string $color)
    {
        $this->color = $color;
    }
*/
}

