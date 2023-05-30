<?php 

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, $palavra);
//strpos, é utilizado para encontrar o endereço de determinado elemento dentro de uma string, nesse caso, a palavra mãe ($palavra) , retornando int (17)

$texto = substr($frase, 0, $q);
var_dump($texto);
//substr retorna uma parte de uma string, nesse caso, de 0 até o numero 17 ($q), que é a posição da palvra mãe.

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); 
echo "<br>";
var_dump($texto2);
// Nesta siruação temos o substr que está cortando a frase a partir da posição da palavra mãe (17, ou $q) mais 3 "casas da string" que seria a parte do "+ strlen($palavra)", e aí sim, ele está mostrando o que deve ser apresentado.

?>
