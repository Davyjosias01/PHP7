<?php 


/* PHP Data Object */

// ==================================================================
/* DSN - Data search name - padrão de conexão com o banco de dados.
	dsn é o que vai dentro do parenteses depois do "new PDO(DNS);" */
// PDO ("tipo do banco: dbname=nome do bando;host=local do banco", "login ou nome usuário", "senha");

// ==================================================================
/* 
*/


$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();


//Fetch all fatia todas as linhas
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

//var_dump($results);


// $row é o nome da array, ou linha, onde estão associadas as informações sobre cada usuário.
// $key é o nome da coluna, no caso um dos índices da $row, pois estamos em uma array de arrays
// $value é o conteúdo o qual está dentro da $key 

foreach($results as $row){
	foreach($row as $key => $value){
		echo "<strong>" . $key . "</strong> " .$value. "<br>";
	}
	echo "<hr>";
}

?>