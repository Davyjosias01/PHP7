<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

print_r($pessoas [1] ['nome']);

// perceba que a array pessoas está recebendo 'João', na posição 'nome' e também está recebendo 20, no endereço 'idade', por isso quando chamamos a array com print_r, podemos buscar endereços na array com a palavra 'idade' ou 'nome'.

?>