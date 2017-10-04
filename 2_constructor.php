<?php
///Class
//contructer
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
$tv_one = new TV('abc',3);  // object created and passing value 

echo $tv_one->model.'<br/>';
$tv_one->volumeUP();
echo $tv_one->volume.'<br/>';
$tv_one->volumeDown();
echo $tv_one->volume.'<br/>';

?>