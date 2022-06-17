<?php
class A {
	public function myAge() {
	return  "Son age is 25\n";
   
	}
}
class B extends A {	
	public function myFatherAge() {
	return  " Father age is 50\n";
 
	}
}
class C extends B {
	public function myGrandfatherAge() {
	return  "GrandFather age is 80\n";
    
	   }
        public function myHistory() {
        echo "Class A " .$this->myage();
        echo "Class B ".$this-> myFatherAge();
        echo "Class C " . $this->myGrandfatherAge();
        }
}
$obj = new C();
$obj->myHistory();
?>