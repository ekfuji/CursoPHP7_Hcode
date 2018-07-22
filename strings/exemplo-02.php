<?php
$nome = "joão rangel";
$nome2 = "JOAO";
echo $nome;
echo "<br>";
//função que transforma o texto para letras maiúsculas
echo strtoupper($nome);
echo "<br>";
//função que transforma o texto para letras minúsculas
echo strtolower($nome2);

echo "<br>";
//função que transforma a primeira letra de cada palavra em maiúscula
echo ucwords($nome);
echo "<br>";

echo "<br>";
//função que transforma a primeira letra da primeira palavra em maiúscula
echo ucfirst($nome);
echo "<br>";

?>