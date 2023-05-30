<?php 

$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

$qualASuaIdade = 30;


if ($qualASuaIdade < $idadeCriança) {
	echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {
	echo "Adolescente";

} elseif ($qualASuaIdade < $idadeMelhor) {
	echo "Adulto";	

} else {
	echo "idoso";

}

echo "<br>";

	//exemplo de operador ternário
echo ($qualASuaIdade < $idadeMaior)?"Menor de idade": "Maior de idade;
// ele compara as duas variáveis e, caso for verdade, ele imprime a primeira parte, entre ? e : caso não, ele imprime a segunda parte, de : até ;


?>