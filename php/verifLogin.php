<?php
session_start();
include 'conn.php';

$dados = filter_input_array(INPUT_POST);

$senha = md5($dados['senha']);

$queryLogin = $conn->prepare("SELECT * FROM USUARIO");
$queryLogin->execute();
$resultado = $queryLogin->fetchAll();
foreach ($resultado as $value) {
	if ($value['email']==$dados['email'] && $value['senha']==$senha) {
	    $_SESSION['nome'] = $value['nome'];
	    $_SESSION['sobrenome'] = $value['sobrenome'];
	    $_SESSION['email'] = $value['email'];
	    echo 'logado';
	}
	elseif ($value['email']==$dados['email'] && $value['senha']!=$senha) {
		echo 'senha incorreta';
	}
	else{
		echo 'email nao existe';
	}
}

?>