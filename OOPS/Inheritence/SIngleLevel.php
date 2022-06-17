<?php
class Fruits{
public $color;
public $price;
function __construct($color,$price){
echo "fruits constructor \n ";

    $this->color = $color;
    $this->price = $price;
}

function display(){
    echo "Fruits : $this->color \n";
    echo "Price of Fruits :  $this->price \n";
}

}    
class Grapes extends Fruits{

}
$fruits= new Fruits("Banana",40);
$fruits->display();
$grapes = new Grapes("Green",100);
$grapes->display();





?>