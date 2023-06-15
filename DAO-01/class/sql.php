<?php

class Sql extends PDO{

    private $conn;

    public function __construct(){  
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }

    private function setParams($statment, $parameters = array()){
        foreach($parameters as $key => $value){
            $this->setParam($key, $value);
        }
    }

    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function queri($rawQuery, $params = array()){
        
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;
    }

    public function select($rawQuery, $params = array()):array{

        foreach ($params as $key => $value){
            echo $params . "," . $key . "," .  $value;
        }
        $stmt = $this->queri($rawQuery, $params);

        return $stmt->fetchALL(PDO::FETCH_ASSOC);

    }



}

?>