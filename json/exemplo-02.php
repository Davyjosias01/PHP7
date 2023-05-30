<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);
	
	//nesta parte do sistema estamos programando a decodificação do json, em json decode atribuo a array decodificada á array $data, a qual é apresentada no var_dump acima.


?>