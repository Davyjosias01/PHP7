<?php 

$name = 'HCode Trenamentos';

$replace = 'Cursos';

$new_name = substr($name, 0, strpos($name, 'T')) .$replace;
//nesta situação, estamos pegando apenas um pedaço da string $nome por meio do substr, a partir do 0 até o endereço da letra T dentro da string name, + o replace que tem o valor de 'Cursos'.

echo $new_name;
 ?>