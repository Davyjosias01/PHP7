<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento"> 
	<input type="submit" name="OK"> 
	<input type="checkbox" name="acesso">

</form>
<?php 



if (isset($_GET)) {
		
	foreach ($_GET as $key => $value) {	
	
		echo "Nome do campo: " . $key;

		echo "<br>";

		echo "Valor do campo: " . $value;

		echo "<hr>";
	}
}

/* Nesta situação, o input envia o valor para $_GET, que pode receber, como uma array, várias informações. Cada uma dessas informações está atribuída a um endereço, que assume o valor de $key, e dentro deste endereço, existe um conteúdo, um material, que neste caso é o $value. Ambas as informações da array estão sendo apresentadas no foreach*/  


?>

