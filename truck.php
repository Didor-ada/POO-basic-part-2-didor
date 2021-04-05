<?php

require_once 'vehicle.php';

class truck extends vehicle
{

    private int $capacity;
    private int $load = 0;
    private string $energy;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;
    }

    public function truckIsFull()
    {
        if ($this->getCapacity() <= $this->load)
        {
            return "Full !";
        } else {
            return "in filling !";
        }
        return $this;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }
}