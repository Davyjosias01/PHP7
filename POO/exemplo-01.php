<?php 

class Pessoa {

	public $nome; //criando um atributo

	public function falar (){ // criando um método
		return "O meu nome é ".$this->nome;

	}

}

$davy = new Pessoa();

$davy->nome="Davy Josias";

echo $davy->falar();

?>