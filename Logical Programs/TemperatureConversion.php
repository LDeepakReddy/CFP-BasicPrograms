<?php
class TemperatureConverter
{
     public static function TemperatureConversion()
    {
        $choice = readline("Enter your choice: \n 1.Celcius to Farenheiht \n 2.Farenheiht to Celcius\n");
        switch ($choice) {
            case '1':
                $celcius = readline("Enter Temperature in Celcius :");
                if (is_numeric($celcius)) {
                    $fahrenheit = ($celcius * (9 / 5)) + 32;          //formula to convert celcius into fahrenheit
                    echo " Temperature in Fahranheit  : " . $fahrenheit;
                } else {
                    echo "Not a valid input";
                }
                break;
            case 2:
                $fahrenheit = readline("Enter Temperature in Fahrenheit :");
                if (is_numeric($fahrenheit)) {
                    $celcius = ($fahrenheit - 32) * 5 / 9;
                    echo " Temperature in Celcius  : " . $celcius;  //formula to convert fahrenheit into celcius
                    break;
                } else {
                    echo "Enter a valid input";
                }
            default:
                echo "Choose valid option";
        }
    }
}

TemperatureConverter::TemperatureConversion();
?>