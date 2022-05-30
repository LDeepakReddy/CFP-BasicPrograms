<?php
$number = readline("Enter a number which you want to reverse it ");
$rev = 0;
$rem;
while ($number != 0){
    $rem = $number % 10;
    $rev = ($rev * 10) + $rem;
    $number = floor ($number /10);
}
echo("Reverse number of given input is : $rev");

?>