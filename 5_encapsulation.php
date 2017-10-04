<?php
///Class
//Data encapsulation
class TV {
	///attribute defina
	protected $model;
	private $volume;


	public function volumeUP()
	{
		$this->volume++;
	}
	public function volumeDown()
	{
		$this->volume--;
	}
	protected function getModel(){  ///Public Punction Getter and Setter functions
		return $this->model;
	}
	public function __construct($m,$v)  //contructer created with dynamic value
	{
		$this->model= $m;
		$this->volume= $v;
	}
}

class plasma extends TV {
	public function getModel(){ //function Over riding also changing access level 
		return $this->model;
	}
}
$tv = new plasma('Plasma TV', 5); //Object created of TV class

echo $tv->getModel();

//Acess Level 
// Public acess level low
// Protected acess level medium
// Private acess level high
// Note Acess Level of parent class must be same to child class or it has to be high exmaple: parent lass function has set to be Protected then his child class is set to be Protected or Public not Privated example above
?>