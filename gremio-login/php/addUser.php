<?php 
include 'conn.php';

$dados = filter_input_array(INPUT_POST);

/*
$queryList = $conn->query("SELECT nome, email, matricula FROM usuarios");
$queryList->execute();
*/
$queryEmail = $conn->prepare("SELECT email FROM usuarios WHERE email = :email");
$queryEmail->bindParam(':email', $dados['email']);
$queryEmail->execute();

$data_email = $queryEmail->fetchALL(PDO::FETCH_ASSOC);

$queryMt = $conn->prepare("SELECT email FROM usuarios WHERE matricula = :mt");
$queryMt->bindParam(':mt', $dados['matricula']);
$queryMt->execute();

$data_mt = $queryMt->fetchALL(PDO::FETCH_ASSOC);


if (sizeof($data_email) > 0) {
	$_SESSION['erro_email'] = "ESTE EMAIL JÁ ESTÁ CADASTRADO";
	header('location: index.php');
} else if (sizeof($data_mt) > 0) {
	$_SESSION['erro_mt'] = "ESTA MATRÍCULA JÁ ESTÁ CADASTRADO";
	header('location: index.php');
} else {
	
	$queryInsert = $conn->prepare("INSERT INTO usuarios(nome, matricula, email, senha) VALUES (:nome, :matricula, :email, :senha)");
	$queryInsert->bindParam(':nome', $dados['nome']);
	$queryInsert->bindParam(':matricula', $dados['matricula']);
	$queryInsert->bindParam(':email', $dados['email']);
	$queryInsert->bindParam(':senha', $dados['senha']);
	$queryInsert->execute();
	
	header('location: consultas.php');
}

 ?>