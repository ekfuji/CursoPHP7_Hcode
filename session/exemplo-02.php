<?php 

require_once("config.php");
//limpa as variáveis de sessão
//session_unset();
//ele destroi as variáveis de sessão e o usuário
//session_destroy();
//criou a session no exemplo-02
echo $_SESSION["nome"];

 ?>