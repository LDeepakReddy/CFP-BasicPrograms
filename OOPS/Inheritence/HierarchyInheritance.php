<?php

//parent class
class City{
    function cityName(){
        echo " Parent class : Hyderabad\n";
    }

}
// child class-1
class Town extends City{
    function townName(){
        echo "child class 1 : Madhuranagar\n";
    }
    
}
//child class -2
class Area extends City{
    function wardName(){
        echo "child class 2 : SRNagar\n";
    }
}

$obj1 = new Town(); //creating object for child class 1
$obj2 = new Area(); //creating object for child class 2

$obj1->cityName(); // calling parent class function from child class 1 object
$obj1->townName(); // calling derived class function

$obj2->cityName(); // calling parent class function from child class 2 object
$obj2->wardName();


?>