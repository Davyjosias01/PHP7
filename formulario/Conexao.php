<?php 

    //conexão do banco de dados mysql;
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-davy';

    $conn = new PDO("mysql:dbname=" . $dbName . ";host=" . $dbHost, $dbUsername, $dbPassword);
    //conexão do banco de dados mysql, FIM;
    
    class Conexao{
        public function insereDados($p, $dado){
            $stmt = $conn->prepare("INSERT INTO usuarios (nome) VALUES (:DADO)");
            $stmt->bindParam(":DADO", $dado);
            $stmt->execute();
        }
    }
?>