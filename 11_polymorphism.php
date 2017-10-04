<?php
//Polymorphism
//Its means many types many forms 
//like any one data  type of varibale bheave multipal 

function __autoload($class){
	include_once "classes/$class.php";
} //Magic Function 

function getLogger($type){
	switch ($type){
		case 'DB':
		return new DBlogger();
		break;
		case 'File':
		return new FileLogger();
		break;
		case 'Email':
		return new Emaillogger();
		break;
	}

}

$logger = getLogger('DB');
$profile = new userProfile($logger);
$profile->deleteUser();
?>