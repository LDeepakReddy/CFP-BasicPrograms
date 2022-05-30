<?php
$N = readline("Enter the NUmber ");
$sum = 0;

if(is_numeric($N)){
for ($i = 1; $i <= $N; $i++){
    $sum = $sum + (1 / $i);
}
echo ("Harmonic Value of $N is : $sum "  );
}
else{
    echo "Please enter numeric value!";
}