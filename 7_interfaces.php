<?php
//Interfaces class
//Multipal Interface implemanted in one class which not possible in abstract class
//we cannat incloude  define variable in interface class 
//we cannot created private function in interface class
//we cannot creat constructor function on interface class
// Private or Protected functions in interfaceggggggggggggggggggg
interface a {
	public function abc(); 
}
interface b {
	public function xyz();
}

class c implements a,b{   //implemented two intereface class
	public function abc(){  //defining interface mamberfunctions
		echo 'abc function';
	}
	public function xyz(){
		echo 'xyz function';
	}
}

$obj = new c();
echo $obj->abc();
echo $obj->xyz();
?>