<?php
$num = readline ("Enter a number to check Even or Odd : ");
if(is_numeric($num)){
if ($num % 2 == 0){
 echo "$num" . " is Even ";
}else{
echo "\n $num" . " is Odd";
}
}else{
    echo "Please enter valid input!";
}