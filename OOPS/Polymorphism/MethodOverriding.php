<?php

class Animal {
    function sound() {
        echo "ANimal sound";
    }
}
class Cat extends Animal{
    function sound()
    {
        echo " cat sound meaw";
    }
}
$obj = new Cat();
$obj->sound();

$animal = new Animal();
$animal->sound();
?>