<?php 

	$nome = "Davy";

	$sobrenome = "Scheuermann";

	$nomeCompleto = $nome . " " . $sobrenome;

	echo $nomeCompleto;

	echo "<br/>";

	unset($nome);

	if (isset($nome)){
	echo $nome;
	}
?>