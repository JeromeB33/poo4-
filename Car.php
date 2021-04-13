<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    private bool $engineOn = false;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function start()
    {
        if ($this->getHasParkBrake() == true) {
            throw new Exception('Park brake is on');
        }

        return $this->engineOn = true;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake.
     */
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake.
     *
     * @return self
     */
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    /**
     * Get the value of engineOn.
     */
    public function getEngineOn()
    {
        return $this->engineOn;
    }

    /**
     * Set the value of engineOn.
     *
     * @return self
     */
    public function setEngineOn($engineOn)
    {
        $this->engineOn = $engineOn;

        return $this;
    }
}
