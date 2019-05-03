<?php
session_start();
include 'conn.php';

$dados = filter_input_array(INPUT_POST);

$senha = md5($dados['senha']);

$queryLogin = $conn->prepare("SELECT * FROM usuarios");
$queryLogin->execute();
$resultado = $queryLogin->fetchAll();
foreach ($resultado as $value) {
	if ($value['matricula']==$dados['matricula'] && $value['senha']==$senha) {
	    $_SESSION['id'] = $value['id'];
	    $_SESSION['nome'] = $value['nome'];
	    $_SESSION['sobrenome'] = $value['sobrenome'];
	    $_SESSION['email'] = $value['email'];
	    $_SESSION['cidade'] = $value['cidade'];
	    $_SESSION['matricula'] = $value['matricula'];
	    echo 'logado';
	}
	elseif ($value['matricula']==$dados['matricula'] && $value['senha']!=$senha) {
		echo 'senha incorreta';
	}
	else{
		echo 'matricula nao existe';
	}
}

?>