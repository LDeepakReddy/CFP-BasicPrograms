 <?php


    class MonthlyPayment
    {
        public static function monthlyPayment()
        {

            $principal = readline("Enter Principle amount ");
            $rate = readline("Enter rate ");
            $years = readline("Enter time in years ");

            $n = 12 * $years;
            $r = $rate / (12 * 100);

            $payment  = ($principal * $r) / (1 - pow(1 + $r, (-$n)));
            echo "Your monthly payment is : " . round($payment, 3);
        }
       
    }



    MonthlyPayment::monthlyPayment($principal, $rate, $years);
    ?> 

