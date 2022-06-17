<?php
include "IAnimal.php";
class Dog implements Animal{
    function sound(){
        echo "Dog sound : Bow bow \n";
    }
    function eat () {
        echo "Dog eat : pedigree";
    }
}

$dog = new Dog();
$dog->sound();
$dog->eat();

?>