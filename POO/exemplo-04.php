<?php  
    //Cada método mágico possui um objetivo.

class Endereco {
    
    private $logradouro;
    private $numero;
    private $cidade;
    
    /*__construct é executado toda vez que um objeto é criado
    ou, cada vez que uma instância é criada.*/
    public function __construct($a, $b, $c){
        $this->logradouro=$a;
        $this->numero=$b;
        $this->cidade=$c;
    }


    /*__destruct é executado toda vez que o código termina,
    no caso, toda vez que ele */
    public function __destruct(){
        echo("<br><br>DESTRUIU");
    }

    public function __toString(){
        return 
        $this->logradouro.", nº".
        $this->numero ." - ". 
        $this->cidade;
    }
}

$meuEndereco = new Endereco("Rua São Bento", 87, "Luzerna");

echo $meuEndereco;


echo $meuEndereco;


?>