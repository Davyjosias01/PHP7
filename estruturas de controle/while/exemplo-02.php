<?php 

$total = 200;
$desconto = 0.9;

do {

	$total *= $desconto;

} while ($total > 100);
echo $total;
	// Observe que, caso o $total não esteja abaixo de 100 ele ainda irá dar mais desconto, pois $total ainda não está abaixo de "100";

?>