<?php
class A {
    public function printItem($string) {
        echo  "Hi :  $string"; 
    } 
    public function printPHP() {
        echo " I am from Hyderabad\n";
    }
}
class B extends A {
    public function printPHP(){
    echo "I am from Nizamabad";
    }
    
    }
 

$a = new A();
$b = new B();
$a->printItem('Mahesh');
$a->printPHP();       
$b->printItem('Anudeep'); 
$b->printPHP();       
?>