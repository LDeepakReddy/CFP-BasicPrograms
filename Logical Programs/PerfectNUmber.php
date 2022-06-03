<?php
$perfect = readline("Enter number to know the number is perfect number or not ");
$sum = 0;
if(is_numeric($perfect)){
for ($i = 1; $i < $perfect; $i++){
    if ($perfect % $i == 0){
        $sum =$sum + $i;
    }
}
if ($sum == $perfect){
    echo "$perfect is a Perfect Number";
}else{
    echo "$perfect is Not a Perfect Number";
}
}else{
    echo "Enter a valid input";
}


?>