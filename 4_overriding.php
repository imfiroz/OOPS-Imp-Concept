<?php
///Class
//Function Over riding 
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

class PlasmaTV extends TV{
	public $model = 'Plasma'; //Overriding veriables
	function __construct(){
		//blank constructer for using over riding function
	}
}

$TV = new PlasmaTV(); //Object create 
echo $TV->model;
?>