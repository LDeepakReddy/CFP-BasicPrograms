<?php

class Shape {
    const Pi = 3.142 ;  
   function __call($functionName, $argument){
     if($functionName == 'area')
     switch(count($argument)){
         case 0 :
             return 0 ;
         case 1 :
             return self::Pi * $argument[0]  * $argument[0]; ; // 3.14 * 5
         case 2 : 
            return $argument[0] * $argument[1];  // 5 * 10
     }
 
   }
 
  }
  $circle = new Shape();
  echo "\nArea of circle : ".$circle->area(); // display the area of circle Output 0
  echo "\n Area of circle:".$circle->area(9); // display the area of circle
  $rectangular = new Shape();
  echo "\n Area of rectangle:".$rectangular->area(5,10); // display area of rectangle
