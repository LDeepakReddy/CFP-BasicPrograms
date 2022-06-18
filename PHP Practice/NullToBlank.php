<?php
function nullToBlank(){

    //$arr = array(null,1,null,9,10);
    $arr = array();
    $size = 5;
   

    for($i=0;$i < $size; $i++){
        $arr[] = readline(" Enter values   ");
        
        if ($arr[$i] == null){
            $arr[$i] = " ";
           
        }
        echo "$arr[$i] \n";
    }
    

}
nullToBlank();

?>