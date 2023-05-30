<?php 

function ola(){
	return "Olá Mundo!<br>";
}

echo ola();
$frase = ola();
echo strlen($frase);

// A função, precisa necessariamente retornar um valor, caso contrário, ela é uma subrotina. Na função existe um parâmetro chamado return, que no caso, retorna o valor desejado.


?>