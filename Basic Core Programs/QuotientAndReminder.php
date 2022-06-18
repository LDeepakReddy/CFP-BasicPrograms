<?php
$num1 = readline ("Enter number ");
$num2 = readline ("Enter number2 ");
if(is_numeric($num1) && ($num2)){
$quotient = ($num1 / $num2);
$remainder = $num1 % $num2;

echo "The quotient is $quotient\n";
echo "The Remainder is $remainder";
}else{
    echo "Enter numeric value !!";
}

?>