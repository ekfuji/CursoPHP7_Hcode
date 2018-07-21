<?php
// operador null coalesce
$a = NULL;

$b = 8;

$c = 10;

echo $a ?? $b ??  $c;
//se $a for nulo mostre $b, se $b for nulo mostre $c
?>