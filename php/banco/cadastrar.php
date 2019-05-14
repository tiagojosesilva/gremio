<?php

require_once 'conexao.php';

$dados = filter_input_array(INPUT_POST);

if($banco->cadastrarUsuario($dados)) {
 header("location: ../../pages/login.php");
} 


?>


