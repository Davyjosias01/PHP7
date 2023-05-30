<?php 

//include "inc/exemplo-01.php";

/*
 nesta situação é procurado para incluir, dentro da pasta de execução do exemplo-02, uma pasta de nome "inc", e dentro desta pasta um documento com o nome "exemplo-01.php".
caso queira buscar uma pasta em um nível acima de diretório, basta colocar a frente de inc, um "../"
*/
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
/*
require obriga que o arquivo exista, e que o arquivo esteja incluído e que o arquivo funciona. já o include tenta fazer funcionar sem que ele esteja 100%
*/

$resultado = somar(10, 25);
echo $resultado;
?>