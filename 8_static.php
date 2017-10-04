<?php
//Static Variable and Static methods (function)
//static relate directly from class with oprator scopresolution ie ::
//Static is use to count object 
//static class which means all mathods and class are static 
class abc {
	public static $obejcount = 0;
	public static function getCount(){
		return self::$obejcount;  // $this can not be use to set the value on static function
	}
	public function __construct(){
		self::$obejcount++;
	}
}

//$a = new abc();
//$b = new abc();
//$b = new abc();
//
//echo abc::getCount();

class xyz extends abc {
	public static function getCount(){
		parent::getCount();
		//new functionallity here.
	}
}

$a = new abc();
$b = new abc();
$c = new abc();

echo xyz::getCount();
?>