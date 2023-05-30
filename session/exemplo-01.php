<?php 

	/*Uma sessão é criada pelo acesso do usuário 
	a um servidor. Um arquivo de texto é criado 
	no sua máquina e uma no servidor. Esses dois arquivos
	são "amarrados" entre sí, e aí sim então, 
	se tem uma sessão. */

	//Uma sessão geralmente dura 20 min.

	//Variáveis de sessão são visiveis em todo o código

require_once("config.php");

$_SESSION['nome'] = 'HCode';

//a variável local só funciona em uma pasta, ou caso, ela venha em um require. 

?>