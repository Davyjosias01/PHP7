<?php 


$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "12345";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "inserido ok";

// $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

// $row é o nome da array, ou linha, onde estão associadas as informações sobre cada usuário.
// $key é o nome da coluna, no caso um dos índices da $row, pois estamos em uma array de arrays
// $value é o conteúdo o qual está dentro da $key 

/*
foreach($results as $row){
	foreach($row as $key => $value){
		echo "<strong>" . $key . "</strong> " .$value. "<br>";
	}
	echo "<hr>";
}
*/

?>