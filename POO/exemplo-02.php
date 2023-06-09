<?php 

class Carro{
	
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}
    /*:float e :int no final da declaração da função representam um cast para o 
    tipo de variável que vai retornar, nesta situação, ela retorna float e int*/ 

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano=$ano;
	}

	public function exibir(){
		return array(
			"modelo"=> $this->getModelo(),
			"motor"=> $this->getMotor(),
			"ano"=> $this->getAno(),
		);
	}
}

$gol = new Carro();
$gol->setModelo("Gol GLI");
$gol->setMotor("1.8");
$gol->setAno("1995");

var_dump($gol->exibir());



?>