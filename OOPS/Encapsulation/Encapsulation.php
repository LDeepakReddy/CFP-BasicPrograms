<?php

class Vehicle{
    protected $brand = "Honda";

    public function getBrand(){
        return $this->brand;
    }
}
class Bike extends Vehicle{
    public function display(){
        return $this->brand;
    }
}
//$myBike = new Vehicle();
$obj = new Bike();

echo $obj->display();



?>