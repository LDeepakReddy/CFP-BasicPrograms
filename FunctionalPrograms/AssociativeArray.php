<?php
$size=readline ("Enter the number of keys and values  ");
$associateArray = array();

for ($i = 0; $i < $size; $i++){
   
    
    $key = readline("Enter the key  ");
    $value = readline ("Enter the value  ");
   
    $associateArray[$key]=$value;

    
}

echo("Elements are : \n");

foreach ($associateArray as $key => $value){
    echo $key . " => " . $value;
    echo "\n";
  

}


?>