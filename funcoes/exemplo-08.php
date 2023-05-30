<?php 

 //destaque no "float ..."
 //destaque no ": string"
	//esta função está recebendo todos os valores no formato de float e está retornando todos os valores em formato de string.

function soma(float ...$valores): string {
	return array_sum($valores);
}

var_dump(soma(2, 3, 4, 5));
echo "<br>";

echo soma(25, 35, 15, 25);
echo "<br>";

echo soma(1.5, 3.4);
echo "<br>";

echo soma("2", "3");
echo "<br>";

/*Ao colocar "float ..." a frente da variável qual a função chama,
estamos dizendo que todas as variaveis que irão entrar na função 
são daquele tipo. Nesta situação, são todas inteiras os valores dentro das arrays*/

/* caso tente colocar uma variável não numérica dentro do chamado da função, ela apresenta erro.*/ 



?>