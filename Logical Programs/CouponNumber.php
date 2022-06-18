<?php
class CouponCode
{

    public static function generateCouponNumber($characters, $num, $length)
    {
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $num = readline("Please enter the Number of coupons to be generated : ");
        $length = 7;
        $coupon = " ";
        echo "Generated coupons  : \n";
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $num; $i++) {
            for ($j = 0; $j <= $length; $j++) {
                $random = mt_rand(0, $max);
                echo "$random";
            }
            echo "\n";
        }
    }

    public static function alphaNumeric($length)
    {
        $arr = array();
        $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $clength   = strlen($chars) - 1;
        $numbers = readline("Enter number of coupons to be generated ");
        $id  = '';

        for ($i = 0; $i < $numbers; $i++) {
            for ($j = 0; $j < $length; $j++) {
                $id .= $chars[mt_rand(0, $clength)];
                $arr[$i]= $id;
                //echo $arr[$i];
            }
            
           
        }

        //return ($id);
        echo "\n";
        echo "$id";
    }
}


//CouponCode ::generateCouponNumber($characters,$num,$length);
$result =  CouponCode::AlphaNumeric(4);
echo "$result \n";





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
