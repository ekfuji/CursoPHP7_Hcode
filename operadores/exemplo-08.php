<?php
//precedência
$resultado = 10 + 3 /2;
//11.5
echo $resultado;
echo "<br>";
$resultado = (10 + 3) /2;
//6.5
echo $resultado;
echo "<br>";
$resultado = (10 + 3) /2 > 5 && 10 + 5 < 20;
//&& e
var_dump($resultado);
echo "<br>";
$resultado = (10 + 3) /2 > 5 || 10 + 5 < 20;
// || ou
var_dump($resultado);



?>