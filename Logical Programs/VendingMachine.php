<?php
class Vending{

     //function to check the notes of given amount using recursion



    public static function vendingMachine($notes, $amount){
        $tempAmount = $amount;
        $totalNotes = 0;
        $flag = false;
        for ($i = 0; $i < sizeof($notes); $i++) {
            /**
            * checking each array is greater than 0 
            **/
            if (floor($tempAmount / $notes[$i]) > 0) {
                /**
                * dividing given amount with array of notes 
                **/
                $NumOfNotes = floor($tempAmount / $notes[$i]);
                $tempAmount = floor($tempAmount % $notes[$i]);
                
                echo $NumOfNotes ." ". $notes[$i]."rs\n";
                $totalNotes++;
                $flag = true;
                break;
            }
        }
        /**
        * recursively checking 
        **/
        if ($flag) { 
            Vending::vendingMachine($notes, $tempAmount);
        }
        return $totalNotes;
    }


}
$notes = array('1000','500','100','50','10','5','2','1');
    
    while($amount<1){
        $amount = readline("Enter the amount of ");
    }
    Vending::vendingMachine($notes,$amount);
?>

