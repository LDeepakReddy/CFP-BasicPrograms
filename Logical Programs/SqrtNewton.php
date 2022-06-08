<?php
class SqrtNewton{
   
static function sqrt($c){
    
    $t = $c ;
    $epsilon = 1e-15 ;
    while(abs($t-($c/$t))>$epsilon*$t){
        $t = ($c/$t + $t)/2 ;
    }
    return $t ;
}
}
$n = readline ("Enter num to find the square root ");
echo SqrtNewton :: sqrt($n);




?>
