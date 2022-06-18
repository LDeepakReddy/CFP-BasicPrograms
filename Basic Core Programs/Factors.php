<?php

$num = readline("Enter the number to get its prime factors : ");
if(is_numeric($num)){
    if($num > 0){
        for ($i = 2 ; $i <= $num; $i++){
            while ($num % $i == 0){
                echo $i . " ";
                $num = $num / $i;
                
            }
        }
    }
}
else{
    echo "Enter a valid Input !!";
}


?>