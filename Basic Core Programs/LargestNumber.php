<?php
$num1 = readline("Enter the First Number ");
$num2 = readline("Enter the Second Number ");
$num3 = readline("Enter the Third Number ");
if(is_numeric(($num1),($num2),($num3))){
if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 is largest ";
}

elseif ($num2 > $num1 && $num2 > $num3) {
    
        echo "$num2 is largest ";
}
    else{
        echo "$num3 is largest ";
}
}
else{
    echo "Please enter numeric value only";
}
?>