<?php

class Person{

    //member variables
    private $fname;
    private $lname;

    //constructor method
    function __construct($fname='Hari',$lname='nath')
    {
        echo "The class ". __CLASS__ ." Inititated\n" ; //magic constant to get class name dynamically

        $this->fname= $fname;
        $this->lname= $lname;
    }

    function show()
    {
        echo "My Name is : " . $this->fname .   $this->lname . " ";
    
    }

    //destructor method
    function __destruct()
    {
        echo "\nThe class ". __CLASS__ ." Destructed";
    }
   
}
$obj = new Person("Shiva","Kumar");
$obj->show();
        
    



?>