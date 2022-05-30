<?php
$headcount = 0;
$tailcount =0;
$coinFliped = readline ("enter number of times coin to be fliped ");
if (is_numeric ($coinFliped) && $coinFliped > 0) {
    for ($i=0; $i < $coinFliped; $i++){
        $result = rand(0,10) / 10;
        if ($result >= 0.5){
            $headcount++;
        }else{
            $tailcount++;
        }
    }
}else{
    echo("enter a valid input");
    exit(0);
}
$headPercentage = ($headcount * 100) / $coinFliped;
$tailPercentage = 100 - $headPercentage;

echo "$headPercentage , $tailPercentage \n";
echo "headPercentage = " . round ($headPercentage) . "\n";
echo "tailPercentage = " . round ($tailPercentage) . "\n";

?>