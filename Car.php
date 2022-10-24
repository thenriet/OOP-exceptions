<?php

require_once 'Vehicle.php';


class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel = 100;

    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setParkBrake($hasParkBrake);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake(): bool 
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): void 
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {

        if ($this->getParkBrake() === true) {
            throw new Exception("The parkbrake is on OMG". PHP_EOL);
        }
            $sentence = "";
            $sentence .= "Starting the engine..." . PHP_EOL;
   
        return $sentence;        
    }
}