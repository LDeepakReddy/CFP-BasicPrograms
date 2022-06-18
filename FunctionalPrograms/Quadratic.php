<?php
function quadratic(){
    $a = readline("enter value for a : ");
    $b = readline("enter value for b : ");
    $c = readline("enter value for c : ");

    if(is_numeric($a) && ($b) && ($c)){

    $delta = abs($b * $b - 4 * $a *$c);
  
    $root1 = (-$b + sqrt($delta));
    $root2 = (-$b - sqrt($delta));

    echo "Roots for this quadratic expressionn are  $root1 and $root2 " ;
}else{
    echo "Enter NUmeric values !!";
}

}

quadratic();


?>