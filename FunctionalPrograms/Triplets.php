<?php
$array = array(0, -2, 2,3,-3,2,7);

$size = sizeof($array);

function sumToZero($array, $size){
    $found = false;
    for ($i = 0; $i < $size - 2;$i++){
        for ($j = $i+1; $i < $size - 1; $j++){
            for ($k = $j+1; $k < $size; $k++){
                
                if ($array[$i] + $array [$j] + $array[$k] == 0){
                    echo "The values which equals to zero sum are :  ";
                    echo $array[$i]," ",
                    $array[$j], " ",
                    $array [$k], " \n";
                    $found = true;
                }
            }
        }
    }
    if ($found == false){
        echo "Not found\n";
    }
    
}

sumToZero($array,$size);

?>