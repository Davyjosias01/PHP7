<?php 
$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

// UPDATE sem o WHERE altera todos os dados do banco
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = "1";

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";
?>