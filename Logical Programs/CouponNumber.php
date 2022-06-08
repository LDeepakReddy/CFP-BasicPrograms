<?php
class CouponCode
{

    public static function generateCouponNumber($characters, $num, $length)
    {
        $characters = "0123465789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $num = readline("Please enter the Number of coupons to be generated : ");
        $length = 11;
        echo "Generated coupons  : \n";
    
        $max = strlen($characters)-1;
        for ($i = 0; $i <= $num; $i++) {
            for ($j = 0; $j <= $length; $j++) {
                $random = rand(0,$max);
                echo $random;
            }
            echo "\n";
        }
    }
}

CouponCode ::generateCouponNumber($characters,$num,$length);




// function randomString($num,$length){
//     $string = " ";
//     $characters = array_merge(range("A","Z"), range("a","z"), range("0","9"));
//     $max = count($characters)-1;
//     for ($i = 1; $i < $num; $i++){
//     for ($j = 0; $j< $length;$j++){
//         $random = rand(0,$max);
//         $string = $characters[$random];
//         echo "$string\n";
//     }
// }
//     return $string;
   

// }

// randomString($num,$length);

// 
