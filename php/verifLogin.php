<?php
include 'conn.php';
session_start();

$dados = filter_input_array(INPUT_POST);

$senha = md5($dados['senha']);

$queryLogin = $conn->prepare("SELECT * FROM usuarios WHERE matricula = :matricula AND senha = :senha");
$queryLogin->bindParam(':matricula', $dados['matricula']);
$queryLogin->bindParam(':senha', $senha);
$queryLogin->execute();

$resultado = $queryLogin->fetchALL(PDO::FETCH_ASSOC);

if (sizeof($resultado) < 1) {
    $_SESSION['erroLogin'] = "Dados incorretos!!";
    header('location: ../pages/login.php');

} else {
    $_SESSION['id'] = $resultado[0]['id'];
    $_SESSION['nome'] = $resultado[0]['nome'];
    $_SESSION['sobrenome'] = $resultado[0]['sobrenome'];
    $_SESSION['email'] = $resultado[0]['email'];
    $_SESSION['cidade'] = $resultado[0]['cidade'];
    $_SESSION['matricula'] = $resultado[0]['matricula'];
    header('location: ../index.php');
}


?>