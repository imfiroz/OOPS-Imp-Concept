<?php
//Access levels in Trait in this was new feature in PHP 5.4 and above 
//In this feature we can change ACCESS level in trait class 
//Private method of trait class is can change to Public 
//It is not possible in Inharitance

trait test {
	private function abc(){
		echo 'Private ABC method of trait class test';
	}
}

class base {
	use test{
		test::abc as public; // chainging Access level to public using "as" keyword
		//also we can rename this method 
		test::abc as public abcoftest;
	} 
}

$obj = new base;
$obj->abcoftest();
?>