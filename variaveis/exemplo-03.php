<?php 
//tipos simples
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
// tipos compostos (array e Objeto)
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

//tipos especiais (resource)
$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = null; 
$vazio = ""; 

?>