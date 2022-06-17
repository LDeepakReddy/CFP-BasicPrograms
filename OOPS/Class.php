<?php
class operations{
    function addition($a,$b){
        $add = $a + $b;
        echo" Addition Of two numbers :   $add";

    }
}
$addObj= new operations; //creation of object of operations class
$addObj->addition(5,6);
