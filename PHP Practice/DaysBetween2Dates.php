<?php



function daysBetweenDate()
{
    
    $startDate = strtotime(readline("Please enter the first date in dd-mm-yyyy format "));
    $endDate = strtotime(readline("Please enter the second date in dd-mm-yyyy format"));

    $timePerDay = 60*60*24; //24hours-60min-60sec
   
    $difference = ($endDate - $startDate) / ($timePerDay);

    
    echo "The differnce between given two dates : $difference days";
}
daysBetweenDate();            

?>

