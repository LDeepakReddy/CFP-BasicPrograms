<?php
$row = readline("Enter Num Of Rows ");
$col = readline("Enter Num Of Columns ");

function create2DArray($row,$col){
    $array = array();
    for ($i = 0; $i < $row;$i++){
        for ($j = 0; $j <$col; $j++){
            $array[$i][$j]= readline("Enter $i$j elements\n");
        }
    }
    return $array;
   
}

function display($array,$row,$col)
{
    for($i = 0; $i < $row;  $i++) {
        for($j = 0; $j <$col; $j++){
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}

 $TwoDArray= create2DArray($row,$col);
 echo "\n";
 display($TwoDArray,$row,$col);
 echo "\n";
 
?>