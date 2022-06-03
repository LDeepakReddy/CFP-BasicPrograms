<?php
class StopWatch{
    public static function clock($startTime, $endTime){
        echo "Enter  1 to start time \n Enter 2 to stop the time";
        $choice = readline ("Choose your option : ");

        if($choice == 1){
            $startTime = time();
            echo "\n $startTime";
        }
        elseif($choice == 2){
            $endTime = time();
            echo "\n $endTime";
            $elapsedTime = $endTime - $startTime;
            echo "\n2Elapsed Time is \n $elapsedTime";
        }
        else{
            echo "Enter valid Input";
        }
    }
}

$startTime = 0;
$endTime = 0;
StopWatch :: clock($startTime, $endTime);


?>