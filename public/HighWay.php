<?php

abstract class HighWay
{

    protected $nbLane;

    protected $maxSpeed;

    private $currentVehicles = [];


    abstract public function addVehicule(Vehicle $vehicle);


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        if($nbLane > 0){
            $this->nbLane = $nbLane;
        }
    }

    public function maxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        if($maxSpeed >= 0){
            $this->maxSpeed = $maxSpeed;
        }
    }
}

class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        if (($vehicle instanceof Car)) {
            $this->currentVehicles[] = $vehicle;
        }
    }


}

class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        if (($vehicle instanceof Bike) or ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}

class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        if (($vehicle instanceof Vehicle)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}