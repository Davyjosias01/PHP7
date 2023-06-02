<?php 

class Pessoa{

	public $nome = "Rasmus Lesdorf";
	protected $idade = 19;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}


class Programador extends Pessoa{

	public function verDados(){

		echo get_class($this) . "<br>";
		//função que apresenta qual a classe a qual está sendo utilizada.

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$obj = new Programador();

// echo $obj->nome . "<br>";:

$obj->verDados();






?>