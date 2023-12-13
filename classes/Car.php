<?php
class Car
{
    //visibility modifier, public, private (default), protected (child classes can access)
    //properties / fields
    private $brand;
    private $color;
    public $vehicleType = "car";


    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function setColor($color)
    {
        $allowedColors = ["red", "blue", "green", "yellow", "black", "white"];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
            return true;
        } else
            return false;


    }
    public function getCarInfo()
    {
        return "Brand:" . $this->brand . ", Color:" . $this->color;
    }
}

