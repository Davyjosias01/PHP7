<?php 

	// str_replace utilizado para retirar um elemento e acrescentar outro dentro do mesmo na string.

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>