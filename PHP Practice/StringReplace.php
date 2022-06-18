<?php
// User Input and Replace String Template “Hello <<UserName>>, How are you?” 
// I/P -> Take User Name as Input. Ensure UserName has min 3 char
// Logic -> Replace <<UserName>> with the proper name
// O/P -> Print the String with User Name 

$userName = readline("Enter a user name : ");
 // $string = "Hello $userName, How are you?";
  echo  "Hello $userName, How are you?";
 

//     $split = explode ( ",",$string );
//     var_dump ($split);
//     echo $split[1];

// for($i = 0; $i< sizeof($split);$i++){
//     if($split[$i] == "<<UserName>>"){
//         $split[1] =   $userName;
//         echo $split;
//         break;

//     }else{
//         echo "  ";
    
//     }

// }


//$split[1] == $userName;
// if($split[1] == "<<UserName>>"){
//     $split[1] = $userName;
    
// }

