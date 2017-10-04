<?php
//Late Static Binding only Avilable PHP 5.3 and above
// like this example we aslo call functions using Late Static Binding

class DB {
	protected static $table = 'basetable';
	public function select(){
		//echo "SELECT * FROM ".self::$table;
		echo "SELECT * FROM ".static::$table;  //value will be panding and its value assign when its object created and its value assign inside class of object
	}
	public function update(){
		//echo "INSERT INTO ".self::$table;
		echo "INSERT INTO ".static::$table;
	}
}

class abc extends DB{  //Model will created for access the query Mostly use in CAKE PHP Framework
	
	protected static $table = 'abc';
}
class xyz extends DB{//Creating another model for accesing other table data
	protected static $table = 'xyz';
}

$abc = new abc;  //Creating Object of first model
$xyz = new xyz; //Creating Object of second model

echo $abc->select();
echo $abc->update();

echo $xyz->select();
echo $xyz->update();
?>