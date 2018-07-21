<?php
//variáveis super globais

$numero = (int)$_GET["a"]; //mudando o tipo para inteiro
//http://localhost/CursoPHP7_Hcode/variaveis/exemplo-04.php?a=123
var_dump($numero);

$segundonumero = (int)$_GET["b"];
//o & serve para mostrar os valores de mais variáveis
//http://localhost/CursoPHP7_Hcode/variaveis/exemplo-04.php?a=123&b=456
var_dump($segundonumero);

//pegar o ip do usuário ($_SERVER pega as informações do ambiente (cliente/servidor))
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
//pegar o nome do arquivo
$local = $_SERVER["SCRIPT_NAME"];
echo $local;


?>