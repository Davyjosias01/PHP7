<?php


function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse . ".php")){
        require_once ($nomeClasse . ".php");
    }
}
spl_autoload_register("incluirClasses");

/* if (isset($_POST['submit'])){
    echo "Nome: " . ($_POST['nome']) . "<br>";
    echo "Email: " . ($_POST['email']) . "<br>";
    echo "Telefone: " . ($_POST['telefone']) . "<br>";
    echo "Sexo: " . ($_POST['genero']) . "<br>";
    echo "Data de nascimento: " . ($_POST['data_nascimento']) . "<br>";
    echo "Cidade: " . ($_POST['cidade']) . "<br>";
} */

$conexao = new Conexao();
if (isset($_POST['submit'])) { //Captura com __POST, as variáveis cadastradas no formulário
    $nome = ($_POST['nome']);
    $email = ($_POST['email']);
    $telefone = ($_POST['telefone']);
    $sexo = ($_POST['genero']);
    $data_nascimento = ($_POST['data_nascimento']);
    $cidade = ($_POST['cidade']);
    $estado = ($_POST['estado']);
    $endereco = ($_POST['endereco']);
}

if(isset($nome)){
    $conexao->insereDados("nome", $nome);    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Formulário</title>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset class="ext">
                <legend class="legext"><strong> Formulário de Clientes </strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <labeL for="nome" class="labelinput">Nome Completo</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <labeL for="email" class="labelinput">Email</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <labeL for="telefone" class="labelinput">Telefone</labeL>
                </div>
                <br><br>
                <fieldset id="sexo" class="int">
                    <legend class="legint">Sexo: </legend>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                </fieldset>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento </b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <labeL for="cidade" class="labelinput">Cidade</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <labeL for="estado" class="labelinput">Estado</labeL>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <labeL for="endereco" class="labelinput">Endereço</labeL>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br>
            </fieldset> 
        </form>
    </div>
</body>
</html>