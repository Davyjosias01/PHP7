<?php 
$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

// UPDATE sem o WHERE altera todos os dados do banco
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Silveriano";
$password = "88268276";
$id = "5";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados";
?>