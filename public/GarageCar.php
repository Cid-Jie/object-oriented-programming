<?php

class GarageCar
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats= 4;
    private string $energy;
    private int $energyLevel;

    //Constructor
    public function __constructor(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    
    //Get functions for each private variable
    public function getNbWheels():int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function getNbSeats():int
    {
        return $this->nbSeats;
    }

    public function getEnergy():string
    {
        return $this->energy;
    }

    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    //Function to start the car
    public function startUp():string
    {
        if($this->getEnergyLevel > 0){
            return 'Go!';
        }else{
            return 'Refuel';
        }
        
    }

    //Function to forward the car
    public function movingForward():string
    {
        $sentence="";
        while($this->getCurrentSpeed >= 0 && $this->getEnergyLevel >=0){
            $this->getCurrentSpeed--;
            $this->getEnergyLevel--;
            $sentence .= "You can roll ... ";
        }
        $sentence .= "You must stopped !";
        return $sentence;
    }

    //Function to stop the car
    public function brake():string
    {
        $sentence="";
        while($this->getEnergyLevel > 0 || $this->getCurrentSpeed == 0){
            $this->getEnergyLevel--;
            $this->getCurrentSpeed--;
            $sentence .= " You must stopped!";
        }
        $sentence .= 'You\'re out of gas :(';
        return $sentence;
    }
}