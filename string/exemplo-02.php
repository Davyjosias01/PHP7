<?php 

	//Funções para utilizar as strings

$nome = "davy josias scheuermann";
echo strtoupper($nome);
// todas as letras para maiusculo.

echo "<br>";
echo strtolower($nome);
//todas as letras para minúsculo.

echo "<br>";

echo $nome;
//as funções anteriores não alteram a variável, apenas apresentam ela de determinada forma.

echo "<br>";

echo ucfirst($nome);
//Primeira letra da string maiuscula.

echo "<br>";

echo ucwords($nome);
// todas as primeiras letras de palavras da string ficam maiusculas.

?>