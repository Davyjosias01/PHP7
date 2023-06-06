<?php 

spl_autoload_register("incluiClasses");
function incluiClasses ($nomeClasse){
	if (file_exists($nomeClasse . ".php") === true){
		require_once($nomeClasse);
	}
}


spl_autoload_register("incluiClassesClass");
function incluiClassesClass ($nomeClasse){
	if (file_exists("Class" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
		require_once("Class" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}
}

?>