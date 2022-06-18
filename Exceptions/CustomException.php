<?php
//class ArgumentException extends Exception{};  
class OddNumberException extends Exception { 
    
    
//user-defined function with an exception  
public static function testEven($num) {  
    //trigger an exception in a "try" block  
    try {  

         if($num%2 == 1) {  
           //throw an exception  
           throw new OddNumberException;  
           echo "After throw this statement will not execute \n";  
          } 
          echo " the passed value is an EVEN Number \n" ;
         
        
     }  
       
     //catch exception  
     catch (OddNumberException $e) {  
         echo " Exception Message: ODD Number \n" ;  
     }  
     //catch exception  
     catch (Exception $e) {  
         echo "Exception Message:  $e->getMessage() "; 

     }  
    //  try {
    //     if (testEven()){
    //         throw new ArgumentException("one argument should be passed ");
    //     }
    //  }catch(Exception $er){
    //   echo "Exception Message : $e->getMessage() ";
       
     
  
}  
 
   
}


OddNumberException :: testEven(5);

?>