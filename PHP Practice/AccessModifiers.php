<?php

$val = 350;
$val1 = 500;

function sum()
{
    global $val;
    global $val1;
    $val3 = 10;
    echo "$val3\n";
}
$totalSum = $val + $val1;
echo "$totalSum\n";

function staticFunction()
{

    static $a = 45;
    $a = $a + 5;
    //echo "$a\n";
    echo "$a\n";
}

class Employee
{

    public $name;
    private $salary;
    protected $town;

    public function __construct($n, $s)
    {
        $this->name = $n;
        $this->salary = $s;
    }

    public function displayName()
    {
        echo "EMployee Name : $this->name\n";
    }
    public function displaySalary()
    {
        echo "EMployee salary : $this->salary\n";
    }
    protected function showTown()
    {
        echo "Employee Town : Hyderabad";
    }
}

class Data extends Employee
{
    public function displayTown()
    {
        echo "Employee Town : Medak\n";
    }
}

$emp = new Employee("Mahesh", 25000);
$emp->name = "Deepak"; //overriding the variable because it is public
//$emp->salary = 40000;
$emp->displayName();
$emp->displaySalary();

$data = new Data("Ashok", 35000);
//$data->showTown();
$data->displayTown();
// $data->displaySalary();

sum();
staticFunction();
staticFunction();
staticFunction();
