<?php 

class Cadastro {

	private $nome;
	private $email;
	private $senha;
	private $valida;

	public function getNome():string {
		return $this->nome;
	}
	public function getEmail():string {
		return $this->email;
	}
	public function getSenha():string {
		return $this->senha;
	}	

	public function setNome($p) {
		$this->nome = $p;
	}

	public function setEmail($p) {
		$this->email = $p;
	}

	public function setSenha($p) {
		$this->senha = $p;
	}


	public function __toString(){ 

		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));
	}
}

?>