<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocaMarcha($marcha);

}

//classes abstratas não podem ser instânciadas.
abstract class Automovel implements Veiculo {

	public function acelerar($velocidade){
		echo ("O veículo acelerou até: ". $velocidade . "km/h");
	}

	public function frear($velocidade){
		echo ("O veículo freou até". $velocidade . "km/h");
	}

	public function trocaMarcha($marcha){
		echo ("O veículo engatou a marcha: ". $marcha);
	}
}

?>