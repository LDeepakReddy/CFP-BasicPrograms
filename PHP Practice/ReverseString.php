<?php

//$string = " Hello GoodMorning ";
$array = array(7, 9, 10, 14, 17, 4, 11, 2, 3, 8);
echo "Given Array : $array ";
//$rev = array();
$size = sizeof($array);

//$size = strlen($string);
//echo "Reverse order of given array  : ";

// for ($i = $size-1 ;$i > 0; $i--){
//   //  $array[$i]= readline("Enter values");

//     echo " $array[$i] ";
// }

for ($i = 0; $i <= $size - 1; $i++) {
    $array[0] = $array[$size - 1];
    $array[$size - 1] = $array[0];
    echo $array[$i] . " ";
}
