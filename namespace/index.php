<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Davy Lindo");
$cad->setEmail("davy.josias@gmail.com");
$cad->setSenha("123456");

$cad->registraVenda();

?>