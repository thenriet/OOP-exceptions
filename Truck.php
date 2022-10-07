<?php
require_once 'Vehicle.php';

class Truck extends Vehicle {

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public const MAX_LOADING = 100;

    private int $capacity;

    private int $loading = 0;

    private string $energy;

    public function __construct(string $color, int $nbSeats, int $capacity, string $energy) 
    {
        parent::__construct($color, $nbSeats);
        $this->capacity = $capacity;
        $this->energy = $energy;
    }

    public function getCapacity(): int {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void {
        $this->capacity = $capacity;
    }

    public function getLoading(): int {
        return $this->loading;
    }

    public function setLoading(int $loading): void {
        $this->loading = $loading;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck 
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) 
        {
            $this->energy = $energy;
        }
        return $this;
    }

    public function isFull($loading) {
        $sentence = "";
        if ($loading <= self::MAX_LOADING){
            $sentence .= "in filling..." . PHP_EOL;
        }
        $this->loading = self::MAX_LOADING;
        $sentence .= "full !";
        return $sentence;
    }
}
