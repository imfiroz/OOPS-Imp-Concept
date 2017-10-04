<?php
///Class
//Inheritance 
class TV {
	///attribute defina
	public $model;
	public $volume;


	function volumeUP()
	{
		$this->volume++;
	}

	function volumeDown()
	{
		$this->volume--;
	}
	function __construct($m,$v)  //contructer created with dynamic value
	{
		$this->model= $m;
		$this->volume= $v;
	}
}

class TVwithtimer extends TV {  /// Inharitance concept
	public $timer = true;
}

$tv = new TVwithtimer ('TV timer', 4);
echo $tv->model;

class Plasma extends TV{
	public $plasma= true;
}

$plasma = new Plasma ('Plasma TV', 5);
echo $plasma->model;

?>