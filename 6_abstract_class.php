<?php
///Class
//Abstract class
abstract class baseEmployee { //Abstract class created becouse no one call this class direactly from object its only call from drive class which it has extends
	protected $firstname;
	protected $lastname;
	
	public abstract function getmothlySalary(); //Enforcing Enforcment class with the help of ABSTRACT keyword due to this all drive class must have this class 
	
	public function getFullName(){
		return $this->firstname." ".$this->lastname; //Concating first Name last name
	}
	public function __construct($f, $l){ //Constrocter for getting vslues 
		$this->firstname = $f;
		$this->lastname = $l;
	}
}

class FulltimeEmployee extends baseEmployee{
	protected $annualsalary;
	
	public function getmothlySalary(){
		return $this->annualsalary / 12;
	}
}
class ContractualEmployee extends baseEmployee{
	protected $hurlysalary;
	protected $workingtime;
	
	public function getmothlySalary(){
		return $this->hurlysalary * $this->workingtime;
	}
}

$FullTimeEmployee = new FulltimeEmployee('Firoz','Baksh');
$ContactEmployee = new ContractualEmployee('Pranay','Banker');

echo $FullTimeEmployee->getFullName();
echo $ContactEmployee->getFullName();

echo $FullTimeEmployee->getmothlySalary();
echo $ContactEmployee->getmothlySalary();
?>