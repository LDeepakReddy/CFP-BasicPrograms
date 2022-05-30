<?php
$num1 = readline("Enter first num ");
$num2 = readline("Enter second number ");

$N = readline("Enter the range  :");


//echo $num1 . " ";

//echo $num2 . " ";

for($i = 1; $i <=$N; $i++){
    $num3 = $num1 +$num2;
    $num1 = $num2;
    $num2 = $num3;

    echo $num3 . " ";

}


?>