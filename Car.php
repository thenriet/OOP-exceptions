<?php

class Car 
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $sentence = "";
        while ($this->getCurrentSpeed() < 15) 
        {
            $this->setCurrentSpeed($this->getCurrentSpeed()+1);
            $sentence .= "Accelerating...".PHP_EOL."Speed: " .$this->getCurrentSpeed() .PHP_EOL;
        }
        $sentence .= "I'm at full speed !";
        return $sentence;
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->getCurrentSpeed() > 0) 
        {
            $this->setCurrentSpeed($this->getCurrentSpeed()-1);
            $sentence .= "Brake !".PHP_EOL."Speed: " .$this->getCurrentSpeed() .PHP_EOL;
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        $sentence = "";
        if($this->currentSpeed === 0 && $this->energyLevel > 0)
        {
            $sentence .= "Starting the engine...";
            return $sentence;
        }
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        if($currentSpeed >= 0) 
        {
            $this->currentSpeed = $currentSpeed;
        }
    }
}