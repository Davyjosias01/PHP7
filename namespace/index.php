<?php 

require_once("config.php");

// use Cliente;


$cad = new Cadastro();

$cad->setNome("Davy Lindo");
$cad->setEmail("davy.josias@gmail.com");
$cad->setSenha("123456");


echo $cad;

?>