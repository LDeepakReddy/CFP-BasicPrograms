<?php


$num1 = readline("Enter first num ");
$num2 = readline("Enter second number ");

$n = readline("Enter the range  :");

if(is_numeric(($num1) && ($num2) && ($n))){

for($i = 1; $i <=$n; $i++){
    $num3 = $num1 +$num2;
    $num1 = $num2;
    $num2 = $num3;

    echo $num3 . " ";

}
}
else{
    echo "Enter valid input";
}


?>