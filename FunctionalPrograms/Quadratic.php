<?php
function quadratic(){
    $a = readline("enter value for a : ");
    $b = readline("enter value for b : ");
    $c = readline("enter value for c : ");

    $delta = abs($b * $b - 4 * $a *$c);
   // $delta =abs($delta);

    $root1 = (-$b + sqrt($delta));
    $root2 = (-$b - sqrt($delta));

    echo "Roots for this quadratic expressionn are  $root1 and $root2 " ;
}

quadratic();


?>