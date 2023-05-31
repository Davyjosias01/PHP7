<?php 

	//A função strftime traz uma gama de recursos muito úteis.
	//Muito interessante ler a documentação no site https://www.php.net/manual/pt_BR/function.strftime.php
	
setlocale(LC_ALL, "pt-Br", "pt-BR.utf-8", "portuguese");

echo strftime("%A, dia %d de %B de %Y");

?>