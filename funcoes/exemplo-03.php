<?php 
	
	//Parâmetros no php7

function ola ($texto, $periodo = "Bom dia"){
//Os valores obrigatórios sempre se manteem a esquerda, em ordem de chamada. 
//$texto é obrigatório, já $periodo, não.

//Quando a string está entre aspas dúplas, é possivel fazer a interpolação.
	return "Olá $texto! $periodo!<br>";


}

echo ola("Mundo");
echo ola("Davy");
echo ola("Glaucio", "Boa tarde");
echo ola("Davy Lindo","");


?>