<?php 

$nome  = "Glaucio";

function teste()
{   global $nome; 
	//utilizamos o global para dizer que a variável é a mesma
	//escopo teste
	echo $nome;
}
function teste2()
{
	//escopo teste2
	global $nome;
	echo  $nome." agora no teste2";
}
//chamando a função
teste2();

?>