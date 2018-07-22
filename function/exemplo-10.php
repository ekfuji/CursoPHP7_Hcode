<?php 
//funções anônimas
function teste($callback)
{
	//Processo lento
	$callback();


}

teste(function(){
	echo "Terminou!";
});




 ?>