<?php
$emp=array(array(100,"Mahi",35000),array(101,"Ashu",40000),array(102,"Deepak",60000));

for($row=0;$row<3;$row++){
    for($column=0;$column<3;$column++){
         echo $emp[$row][$column]." ";
    }
    echo "\n";
}
?>