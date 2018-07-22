<?php 
//funções novidades do PHP7
//os ... significam que todos os valores a seguir são do mesmo tipo (declaração de tipo escalares)
function soma(float ...$valores):string //conversão do tipo de dado para string
{
	//array_sum é uma função que soma todos os valores
	return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.6,3.2);
echo "<br>";


 ?>