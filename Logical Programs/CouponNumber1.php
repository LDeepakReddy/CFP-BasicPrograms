<?php

$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$length=7;
$random = " ";

function generateCouponNumber(){

    for ($i = 0; $i < $length;$i++){
        $randomCoupon = mt_rand(0,$length-1);
    }
    
}


?>