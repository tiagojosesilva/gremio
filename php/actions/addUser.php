<?php 
session_start();

require_once 'conn.php';

$dados = filter_input_array(INPUT_POST);

if($dados['senha']!=$dados['confirmarsenha']){
	echo 'senhas diferentes';
	exit();
}

$queryEmail = $conn->prepare("SELECT * FROM USUARIO");
$queryEmail->execute();
$result = $queryEmail->fetchAll();
foreach ($result as $value) {
	if ($value['email']==$dados['email']) {
		echo 'email ja existe';
		exit();
	} else {
		
		$queryInsert = $conn->prepare("INSERT INTO USUARIO(nome, sobrenome, email, senha) VALUES (:nome, :sobrenome,  :email, :senha)");
		$queryInsert->bindParam(':nome', $dados['nome']);
		$queryInsert->bindParam(':sobrenome', $dados['sobrenome']);
		$queryInsert->bindParam(':email', $dados['email']);
		$queryInsert->bindParam(':senha', md5($dados['senha']));
		$queryInsert->execute();
		$_SESSION['cadastrado_sucesso']=true;
		exit();
	}
}


/*
$queryList = $conn->query("SELECT nome, email, matricula FROM usuarios");
$queryList->execute();
$queryEmail = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
$queryEmail->bindParam(':email', $dados['email']);
$queryEmail->execute();

$data_email = $queryEmail->fetchALL(PDO::FETCH_ASSOC);

$queryMt = $conn->prepare("SELECT email FROM usuarios WHERE matricula = :mt");
$queryMt->bindParam(':mt', $dados['matricula']);
$queryMt->execute();

$data_mt = $queryMt->fetchALL(PDO::FETCH_ASSOC);


if (sizeof($data_email) > 0) {
	$_SESSION['erro'] = "ESTE EMAIL JÁ ESTÁ CADASTRADO";
	header('location: ../pages/cadastro.php');
} else if (sizeof($data_mt) > 0) {
	$_SESSION['erro'] = "ESTA MATRÍCULA JÁ ESTÁ CADASTRADO";
	header('location: ../pages/cadastro.php');
}else if($dados['senha']!=$dados['confirmarsenha']){
	$_SESSION['erro'] = "SENHAS NÃO CONBINAM";
	header('location: ../pages/cadastro.php');	
}else {
	
	$queryInsert = $conn->prepare("INSERT INTO usuarios(nome, sobrenome, cidade, matricula, email, senha) VALUES (:nome,:sobrenome,:cidade, :matricula, :email, :senha)");
	$queryInsert->bindParam(':nome', $dados['nome']);
	$queryInsert->bindParam(':sobrenome', $dados['sobrenome']);
	$queryInsert->bindParam(':cidade', $dados['cidade']);
	$queryInsert->bindParam(':matricula', $dados['matricula']);
	$queryInsert->bindParam(':email', $dados['email']);
	$queryInsert->bindParam(':senha', md5($dados['senha']));
	$queryInsert->execute();
	
	header('location: ../pages/login.php');
}
*/
 ?>