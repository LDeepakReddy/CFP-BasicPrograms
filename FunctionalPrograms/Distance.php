<?php
function distance(){
    
$x = readline("Please Enter the value of x-coordinate : ");
$y = readline("Please Enter the value of y-coordinate : ");
if (is_numeric($x) && ($y)){
$sqrt= sqrt(($x * $x)+ ($y * $y));
echo "Distace between 2 points is  $sqrt\n";

}
else{
    echo "Invalid Input";
}

}

distance();

?>