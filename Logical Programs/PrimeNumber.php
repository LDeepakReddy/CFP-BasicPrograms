<?php
$number = readline("Enter a number to check prime or not : ");
$count = 0;
if(is_numeric($number)){
for($i = 1; $i <= $number; $i++){
    if ($number % $i == 0){
        $count++;
    }
}
if ($count == 2){
    echo "$number is prime number";
}else{
    echo "$number is not prime number";
}
}
else{
    echo "Enter numeric value only";
}
?>