<?php 

	//Operadores de comparação.

$a = 30;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b);

echo "<br>";
//comparação de valores, não leva em consideração o tipo de variável.

var_dump($a === $b);

echo "<br>";
//comparação de valor e de tipo, leva em consideração o tipo de variável que está sendo comparada.

var_dump($a != $b);

echo "<br>";
//comparing values, if he isn't equal, the operator return "true", else, if the value is equal, the return is "false".
//that operator just compare the value of the variable, not the type.

var_dump($a !== $b);
//comparing the values and the type of variable

?>