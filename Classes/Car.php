<?php

class Car{
    private $brand; // we can use protected so other can access the properties
    private $color;

    //Constructor

    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    //getter and setter
    public function getBrand(){
        return  $this->brand;
    }
    public function getColor(){
        return  $this->color;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function setColor($color){
        $this->color = $color;
    }

    //Method

}