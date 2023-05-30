<?php 

//Variáveis arrays superglobais --> $_GET , $_SERVER.

$nome = (int)$_GET["a"];

// var_dump($nome);

$ip = $_SERVER['SCRIPT_NAME'];

echo $ip;


?>