<?php 
require_once("config.php");
session_regenerate_id();
//gera nova sessão a cada atualização de página

echo session_id();
echo "<br>";
var_dump($_SESSION);



 ?>