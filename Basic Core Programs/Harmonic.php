<?php
$n = readline("Enter the NUmber ");
$sum = 0;

if(is_numeric($n)){
for ($i = 1; $i <= $n; $i++){
    $sum = $sum + (1 / $i);
}
echo ("Harmonic Value of $n is : $sum "  );
}
else{
    echo "Please enter numeric value!";
}