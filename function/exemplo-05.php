<?php 
//função com parâmetro por valor
//passagem de valor por referência coloca-se um & ex: &$b
$a =10;

function trocaValor(&$b)
{
	$b += 50;

	return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;


 ?>