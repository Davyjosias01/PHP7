<?php 

// mysqli (endereço do servidor, usuário, senha, banco de dados);
$conn = new mysqli("localhost", "root", "", "dbphp7");

if (mysqli_connect_error()){
	echo "Erro: " . mysqli_connect_error();
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


/*fetch array pode ser convertido em uma array com apenas os nomes das colunas, use fetch_assoc, 
sem o fetch assoc, ou o MYSQLI_ASSOC, os indices numéricos virão junto. Muito mais conteúdo */

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){
	array_push($data, $row);
}

echo json_encode($data);

?>