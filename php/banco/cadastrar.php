<?php

require_once 'conexao.php';

$dados = filter_input_array(INPUT_POST);


var_dump($dados);
if($banco->cadastrarUsuario($dados)) {
 header("location: ../../pages/login.php");
} 


?>


