<?php
//retorna a posição da string procurada: "mãe"
$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";
$q = strrpos($frase, $palavra);
var_dump($q);
echo "<br>";
$texto = substr($frase, 0, $q);
//retorna a posição da string "mãe" e printa a frase até a string "mãe".
var_dump($texto);
echo "<br>";
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
//printa a frase após a string "mãe"
var_dump($texto2);
//strlen retorna a quantidade de caracteres da string

?>