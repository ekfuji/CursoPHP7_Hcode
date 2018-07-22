<?php 
echo "<select>";// o comando <select> é do html para criar uma caixa de seleção 
for ($i=date("Y"); $i > date("Y")-100 ; $i--) {  
	echo '<option value="'.$i.'">'.$i.'</option>';//<option> para mostrar os valores de seleção
}
echo "</select>";

 ?>