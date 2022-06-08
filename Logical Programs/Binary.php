<?php

class Binary{

    static function decToBinary($dec){
        $bin = "";
        while ($dec>=1){
        $bin = ($dec % 2).$bin;
        $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
        }
        return $bin;
    }

     static function swap($bin){
        if(strlen($bin)%4 !== 0){
            for ($i=0; $i < (strlen($bin)%4)-4; $i++) { 
                $bin = "0".$bin;
            }
        }
        $arrBin = str_split($bin , 1);
        $size = count($arrBin);
        $i = $size-4;
        for ($j=0; $j < 4 ; $j++) { 
                $temp = $arrBin[$i] ;
                $arrBin[$i] = $arrBin[$j];
                $arrBin[$j] = $temp ;
                $i++;
        }
        $bin = implode($arrBin);
        echo $bin;
        return $bin ;
    }   

    static function powOf2($dec){
        $decArr = str_split($dec);
       $i = 0 ;
       $temp = 2**$i;
       while ($temp < $dec) {
           if($temp == $dec){
               return true ;
           }
           $i++;
           $temp = 2**$i;
       }
       return false;
    }

    static function binToDec($bin){
        $binArr = str_split($bin);
        $dec = 0 ;
        $j = 0 ;
        for ($i=count($binArr)-1 ; $i >= 0 ; $i--) { 
            if($binArr[$i] == 1){
                $dec = $dec +  2**$j ;
            }
            $j++;
        }
        echo $dec ;
        return $dec ;
    }




}
$num=readline("Enter a number : ");
$binary = Binary ::decToBinary($num);
echo "Binary number is :  $binary\n";

$bin=Binary::swap($bin);
echo " Binary afer swapping is $bin\n";

$dec= Binary::binToDec($bin);
echo "after convert into decimal $dec \n";






?>