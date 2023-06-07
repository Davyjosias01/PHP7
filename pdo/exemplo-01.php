<?php 
/* DSN - Data search name - padrão de conexão com o banco de dados.
	dsn é o que vai dentro do parenteses depois do "new PDO(DNS);" */
// PDO ("tipo do banco: dbname=nome do bando;host=local do banco", "login ou nome usuário", "senha");

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($results as $row){
	foreach($row as $key => $value){
		echo "<strong>" . $key . "</strong> " .$value. "<br>";
	}
	echo "<hr>";
}

?>