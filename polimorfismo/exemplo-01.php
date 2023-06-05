<?php 

abstract class Animal {

	public function  falar(){
		return "Som";
	}
	public function  mover(){
		return "Anda";
	}
}

class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}
	public function mover(){
		return "Voa e " . parent::mover();
	}
}

$luke = new Cachorro;
$garfield = new Gato;
$ze = new Passaro;

echo $luke->falar() . "<br>";
echo $luke->mover() . "<br>";

echo ("----------------------<br>");

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo ("----------------------<br>");

echo $ze->mover() . "<br>";
echo $ze->falar() . "<br>";


?>