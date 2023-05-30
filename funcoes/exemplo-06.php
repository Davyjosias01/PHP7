<?php 

$pessoa = array(

	'nome' => "joão",
	'idade' => 20

);

foreach ($pessoa as &$value) {
	
	echo $value. "<br>";

	if (gettype($value) === 'integer') {

		$value += 10;

	} else if (gettype($value) === 'string') {

		$value = 'Davy';
	} 
}

echo $pessoa['nome'];

?>