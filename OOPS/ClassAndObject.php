<?php

class User
{
    //member variables
    public $id;
    public $name;
    public $email;
    public $phone;

    //member functions

    function setData($i, $n, $e, $p)
    {
        $this->id = $i;
        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;
    }
    function getData()
    {
        return   "\n ID : " . $this->id .
            "\n NAME : " . $this->name .
            "\n EMAIL :" . $this->email .
            "\n PHONE : " . $this->phone;
    }
}

$user1 = new User();
$user1->setData(7, "Mahi", "mahi@gmail.com", 9182510123);
echo $user1->getData();

$user2 = new User();
$user2->id = 8;         // setting data by using objects
$user2->name = "samee";
$user2->email = "abc@gmail.com";
$user2->phone = 812213143;
echo $user2->getData();
