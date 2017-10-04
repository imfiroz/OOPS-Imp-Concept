<?php
//Method Overriding in Trait
class test {
	public function abc (){
		echo 'abc method of test class';
	}
}

//When we create a trait class then parent class method will be overrided by trait class 
//Priority is given to trait class example below

trait traitClass {
	public function abc(){
		echo 'abc method from tarit class';
	}
}

class child extends test {
	use traitClass;  /// injecting trait class method 
	//if we declare a method inside child class then the first priority given to child class method example below 
	public function abc(){
		echo 'abc method from child class';
	}
} 

$obj = new child;
$obj-> abc();
?>