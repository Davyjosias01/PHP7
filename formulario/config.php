<?php 

    //conexão do banco de dados mysql;
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-davy';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_error()){
        echo "Deu erro!";
    } else {
        echo "Deu boa!";
    }
    //conexão do banco de dados mysql, FIM;

    class Conexao{
        public function insereDados($parametro, $dado){
            $stmt = $conn->prepare("INSERT INTO usuarios ($parametro) VALUE (?)");
            $stmt->bind_param('ss', $dado);
            $stmt->execute();
        }
    }
?>