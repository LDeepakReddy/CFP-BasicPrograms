<?php
class GrandFather{
    function grandPa(){
        echo "GrandFather age =65\n";
    }
}
class Father extends GrandFather{
    function father(){
        echo "Father age = 38\n";
    }
}
class Children extends Father{
    function children(){
        echo "children age = 22\n";
    }
}

$children = new Children();
$children->grandPa();
$children->father();
$children->children();




?>