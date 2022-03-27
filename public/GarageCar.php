<?php

class GarageCar
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel=30;

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    
    //Get functions for each private attribute
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

     //Set function
     public function setNbWheels():void
     {
         $this->nbWheels = $nbWheels;
     }
 
     public function setCurrentSpeed():void
     {
        if($currentSpeed >= 0){
            $this->currentSpeed= $currentSpeed;
        }
     }
 
     public function setColor():void
     {
         $this->color = $color;
     }
 
     public function setNbSeats():void
     {
         $this->nbSeats = $nbSeats;
     }
 
     public function setEnergy():void
     {
         $this->energy = $energy;
     }
 
     public function setEnergyLevel():void
     {
         $this->energyLevel = $energyLevel;
     }

    //Function to start the car
    public function startUp():string
    {
        if($this->energyLevel > 0){
            return 'Go!';
        }else{
            return 'Refuel';
        }   
    }

    //Function to forward the car
    public function forward():string 
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    //Function to stop the car
    public function brake():string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}