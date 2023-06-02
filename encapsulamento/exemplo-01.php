<?php 

class Encapsulamento{

	public $nome = "Rasmus Lesdorf";
	private $idade = 57;
	protected $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$obj = new Encapsulamento();

// echo $obj->nome . "<br>";:

$obj->verDados();


?>