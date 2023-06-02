<?php 
	//Classe DateTime
	//Pesquise a documentação das classes no site do php, pelo amor de deus.


$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");




?>