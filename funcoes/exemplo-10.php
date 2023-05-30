<?php 

	//Exemplo de função anônima.

function test($callback){

	// Processo lento
	$callback();
}

//Repare que quando foi chamado a função test, não foi parametrizado uma sting, ou um int. Foi parametrizado uma função anônima, que não possui nome ou meio por ser chamada. Ela é simplesmente utilizada como parâmetro. 

test(function(){
	echo "Terminou!";
} ) ;


?>