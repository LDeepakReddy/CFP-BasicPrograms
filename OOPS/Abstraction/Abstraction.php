<?php
abstract class Cars {
    public abstract function getCompanyName();
    public abstract function getPrice();
}
class Thor  extends Cars {
    public function getCompanyName() {
        return "Mahindra \n";
    }
    public  function getPrice() {
      return 1500000 . "\n";
    }
}
class Santro extends Cars {
    public function getCompanyName() { 
        return "Hyundai \n";
    }
    public function getPrice() {
        return 300000 . " \n";
    }
}
$car = new Thor();
$car1 = new Santro();
//$car3 = new Cars();
echo $car->getCompanyName();
echo $car->getPrice();
echo $car1->getCompanyName();
echo $car1->getPrice();
?>