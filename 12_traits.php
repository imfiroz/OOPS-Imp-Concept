<?php
//traits
//Available on PHP 5.4
//Horizontal Execution 
//multipal traits extends possible 

class abc{
	public function test(){
		echo 'test function from class abc';
	}
}

trait test{
	public function test2(){
		echo 'test2 function/method of test trait';
	}
}
trait test2{  //Created multipal trait
	public function test3(){
		echo 'test3 function/method of test2 trait';
	}
}
class one extends abc{
	use test,test2;   //calling trait function of test and test2 method
}
class two extends abc{
	use test;		//calling only one method 
}
class three extends abc{
	// in this classs only one method is called is from abc class
}
class four extends abc{
	// in this classs only one method is called is from abc class
}
$obj = new one;
//$obj1 = new three;
$obj->test3(); 
//$obj1->test();
?>