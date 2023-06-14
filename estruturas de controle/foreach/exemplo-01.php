<?php 

/*no foreach existem dois parâmetros, o primeiro é o indice [0], [1], [2] ... e o segundo é o valor do índice, neste caso, meses é a array a ser percorrida, $cont são os indices e $mes é o conteúdo de cada indice.*/

$meses = array(
	"janeiro", "fevereiro", "março", "abril",
	"maio", "junho", "julho", "agosto", "setembro",
	"outubro", "novembro", "dezembro"
);

foreach ($meses as $cont => $mes) {
	echo "indice: " .$cont + 1 ."<br>";
	echo "o mês é: " .$mes ."<br> <br>";

}

// o foreach apresenta uma maneira simples de apresentar uma array, neste caso 




?>