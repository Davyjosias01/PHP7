<?php 


// mysqli (endereço do servidor, usuário, senha, banco de dados);
$conn = new mysqli("localhost", "root", "", "dbphp7");

if (mysqli_connect_error()){
	echo "Erro: " . mysqli_connect_error();
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param('ss', $login, $pass);

// $type = "ss";
$login = "lindasso";
$pass = "92089";

$stmt->execute();

// $stmt->bind_param("ss", $login, $pass);

?>