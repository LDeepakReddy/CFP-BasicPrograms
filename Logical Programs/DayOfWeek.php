<?php
class DayOfWeek{

    public static function dayOfWeek($day,$month,$year){

    $dz ="Sunday Monday Tuesday Wednesday Thursday Friday Saturday";
    $days = explode(" ", $dz);
    echo $days;


    $day = readline("Please enter the day : ");
    $month = readline("Please enter the month ");
    $year = readline("Enter the year : ");

    $y = floor($year - (14 - $month)/12);
    $x = floor($y + ($y / 4) - ($y / 100) + ($y / 400));
    $m = ($month + (12 * (14 - $month)/ 12)-2);
    $d = floor(($day + $x + (31 * $m/12)) % 7);

    $result = $days[$d];

    echo " The Day is $result \n";

    }



}

DayOfWeek ::dayOfWeek($day,$month,$year);




?>