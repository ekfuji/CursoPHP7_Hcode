<?php
// para subir um diretório usamos: ../
//include "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
//_once é para trazer o arquivo apenas uma vez e ignorar outra adição do mesmo arquivo

$resultado = somar(10,20);

echo $resultado;
/*
 SDiferença entre include e require
 O require obriga que o arquivo que você declarou exista e que esteja funcionando corretamente, caso isso não ocorra ele gera um erro fatal e para a execução do programa. (a partir do PHP7 ele não interrompe a execução da página, apenas gera uma exceção)
 Já o include tenta funcionar mesmo que o arquivo não exista ou não esteja funcionando corretamente(possui mais recursos ex:Include path)
 */
 ?>