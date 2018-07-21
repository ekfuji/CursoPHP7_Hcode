<?php
/*CamelCase
Não colocar números início e caracteres especiais, evitar colocar números no final.
não utilizar variáveis com nomes pré-definidos ex: $this */
$anoNascimento = 1990;
$nome1 = "João";
$sobrenome = "Rangel";
$nomeCompleto = $nome1 . " " . $sobrenome;
// Para concatenar no PHP usamos o ponto




echo $nome1;

echo "</br>"; //quebra de linha
/*unset($nome1); 
o unset irá destruir variável
*/
if (isset($nome1))//isset verifica se a variável existe
{
	echo $nomeCompleto;
}



?>