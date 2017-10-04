<?php
///Class
class TV {
	///attribute defina
	public $model = 'xyz';
	public $volume = 1;


	function volumeUP()
	{
		$this->volume++;
	}

	function volumeDown()
	{
		$this->volume--;
	}
}
$tv_one = new TV;  // object created 
$tv_two = new TV;
$tv_one->volumeUP();
$tv_one->volumeDown();

$tv_two->volumeUP();

echo $tv_one->volume;
echo $tv_two->volume;

$tv_one->model='abc';



?>