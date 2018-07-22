<?php 
//a função timezone é necessária para acertar o horário da timezone
date_default_timezone_set('America/Sao_Paulo');

$dt = new DateTime();

echo $dt->format("d/m/y  H:i:s");
echo "<br>";

$periodo = new DateInterval("P15D");

$dt->add($periodo);
//sub

echo $dt->format("d/m/y  H:i:s");

 ?>