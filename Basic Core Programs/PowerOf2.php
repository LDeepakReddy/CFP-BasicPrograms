<?php
$expo = readline("Enter the Number ");
$base = 2;
$power = 1;
if(is_numeric($expo)){
if($expo < 31) {
    for($i = 0;$i < $expo;$i++){
        $power = $power * $base;
    }
    echo"$base power of $expo is  $power";

}else{
    echo "Overflowed int value!";
}
}else{
echo "Please enter numeric value only ";
}



?>