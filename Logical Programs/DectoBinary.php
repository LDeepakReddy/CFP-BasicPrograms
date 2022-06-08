<?php
class DecimalToBinary{

static function decToBinary($dec){
        $bin = "";
        while ($dec>=1){
        $bin = ($dec % 2).$bin;
        $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
        }
        return $bin;
    }

}


$dec = readline("Enter the number to convert it into Binary : ");
echo DecimalToBinary :: decToBinary($dec);





?>