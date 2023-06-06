<?php 

namespace Cliente;

class Cadastro extends \Cadastro {

	public function compra(){

		echo "O cliente ". $this->getNome . " comprou";

	}

}



?>