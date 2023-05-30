<?php 

function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2, 3, 4, 5);
echo "<br>";

echo soma(25, 35, 15, 25);
echo "<br>";

echo soma(1.5, 3.4);
echo "<br>";

/*Ao colocar "int ..." a frente da variável qual a função chama,
estamos dizendo que todas as variaveis que irão entrar na função 
são daquele tipo. Nesta situação, são todas inteiras os valores dentro das arrays*/


?>