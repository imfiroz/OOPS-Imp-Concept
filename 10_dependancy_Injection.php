<?php
//Dependency Injection 
//Its a Design pattern like OOPs , MVC we use Dependency Injection it Increases code reusablilty 
//Indepandent libbery we use in multipal projects
//But sometimes one libbery use in another libbery this time we reqired a Dependency 
//Dont Repeat Your Self Concept (DRYConcept) reducing code


class logger {
	public function log($message){
		echo "Logging Message:$message";
	}
}
//$logger = new logger();
//$logger -> log('This is a Message');

class UserProfile{  //Userprofile is dependent on logger class
	
	private $logger;
	
	public function Create(){
		//Create User
		//$logger = new logger();
		$this->logger->log('Created New User'); //Access sub object (Dry Concept)
	}
	public function Update(){
		//Updated user
		//$logger = new logger();
		$this->logger->log('User Updated');
	}
	public function Delete(){
		//User Deleted
		//$logger = new logger();
		$this->logger->log('User Deleted');
	}
	
	public function __construct (logger $logger){   ///And passing logger object to contructer class so that will call logger variable which is created inside userprofile 
		// Type hinting the logger (logger $logger) which will only use to only pass logger object and also it will clear developer to identify this object is of logger class 
		$this->logger = $logger;  // Sub Object 
	}
}
$logger = new logger(); //insted of creating in all function we create a object one time 
$userlog = new UserProfile($logger); //Passing Logger variable to userprofile function (1)
$userlog ->Delete();

?>