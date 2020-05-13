<?php

class Person {
	private $name;
	private $age;
	
	public function __construct($n, $a){
		$this->setName($n);
		$this->setAge($a);
	}
	
	public function  setName($n){
		$this->name = $n;
	}

	public function getName(){
		return $this->name;
	}

	public function  setAge($a){
		$this->age = $a;
	}

	public function getAge(){
		return $this->age;
	}

	public function whoIAm(){
		echo "I am ".$this->name." and I am ".$this->age." years old!";
	}
}

$p = new Person("Teste", 23);
$p->whoIAm();
?>
