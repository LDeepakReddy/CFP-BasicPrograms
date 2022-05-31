<?php
function windchill(){
    $temp = readline("Enter Temperature : ");
    $speed = readline("Enter wind Speed : ");
    if($temp <= 50 && $speed >= 3 && $speed <= 120){
        $w = 35.74 + (0.6215 * $temp) + (((0.4275 * $temp) - 35.75) * (pow($speed,0.16)));

        echo "Wind Chill is :  $w\n";
    }else{
        echo "Please enter valid Input";
    }
}

windchill();


?>