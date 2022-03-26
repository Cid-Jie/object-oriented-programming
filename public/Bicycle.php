<?php

class Bicycle 
{
    private string $color;
    private bool $garageDoor;
    private int $currentSpeed;
    private int $nbSeats = 2;
    private int $nbWheels= 2;

    //Constructor d'objet
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    //Get function for all private attributes
    public function getColor():string
    {
        return $this->color;
    }

    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    public function getGarageDoor():bool
    {
        return $this->garageDoor;
    }

    public function getNbSeats():int
    {
        return $this->nbSeats;
    }

    public function getNbWheels():string
    {
        return $this->nbWheels;
    }

    //Set function
    public function setColor(string $color):void
    {
        $this->color = $color;
    }

    public function setCurrentSpeed(int $currentSpeed):void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed= $currentSpeed;
        }
        
    }

    public function setGarageDoor():bool
    {
        return $this->garageDoor;
    }

    public function setNbSeats():int
    {
        return $this->nbSeats;
    }

    public function setNbWheels():string
    {
        return $this->nbWheels;
    }

    //Function to forward the bike
    public function forward():string 
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    //Function to stop the bike
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

    //Function to stop it now
    public function stopNow():string
    {
       if($this->currentSpeed--){
            return 'Stop now !';
        }
    }
}
