<?php
class CouponCode
{

    public static function generateCouponNumber()
    {
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $num = readline("Please enter the Number of coupons to be generated : ");
        $length = 12;
        $coupon = array();
        $distinct = array();
        echo "Generated coupons  : \n";
        $couponCode =  ' ';

        for ($i = 1; $i <= $num; $i++) {
            for ($k = 1; $k <= $length; $k++) {
                for ($j = 1; $j <= $length; $j++) {
                    $random = rand(0, strlen($characters) - 1);
                    $couponCode = $characters[$random];
                    //echo $coupon[$j] = $couponCode;
                    //echo $couponCode;
                }
                // echo "\n";
                /**
                 * joining array elements with empty string using implode
                 * evaluating the coupons if they are exist or not in an array
                 * storing generated code in array
                 * */
                $coupon[$k] = $couponCode;
                $string = implode("", $coupon); //

                if ($distinct[$j] == $string) {
                    echo "----Coupon Already Exist---- \n";
                } else {
                    $distinct[$j] = $string;
                }
            }
            echo $distinct[$j] . "\n";
        }
    }
}


CouponCode::generateCouponNumber();
