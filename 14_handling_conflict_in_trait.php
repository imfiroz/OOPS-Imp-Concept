<?php
//Handling Conflict in Trait
//Using "instedof" ans "as" keyword which is PHP 5.5 and above version
// This concept use when we call same funtionlity which is common in both things like "man have walk method and animal have walk method but both are different walking style"

trait one {
	public function test (){
		echo 'Test method from ONE trait';
	}
}
trait two {
	public function test(){
		echo 'Test method from TWO trait';
	}
}

class abc {
	use one,two{ /// There is error "there are collisions with other trait methods" in this case we use new keyword
		one::test insteadof two; // to calling trait one method insted of trait two
		two::test as traittwo; // calling trait two method as new name traittwo to avoding conflict
	} 
}

$obj = new abc;
$obj->traittwo();
$obj->test();
?>