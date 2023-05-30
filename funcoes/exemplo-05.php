<?php 

$a = 10;
	// Nesta situação, temos um "&" antes do argumento presente na função trocaValor, isso é a passagem de parâmetro por referência.
	//Ao invez de ele passar o valor da variável, ele vai passar o endereço da variável, para que ele use a variável, e não o seu valor.


function trocaValor (&$a) {

	$a += 50;

	return $a;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";

echo $a;


?>