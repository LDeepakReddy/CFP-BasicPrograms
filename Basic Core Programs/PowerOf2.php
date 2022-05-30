<?php
$N = readline("Enter the Number ");

if($N <= 31) {
    for ($i = 1; $i <= $N; $i++){
        $Power = pow(2,$i);
        echo "$Power\n";
    }
}
else{
    echo ("Please enter value between 0 to 31 ");
}


?>