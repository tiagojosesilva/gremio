<?php
session_start();
require_once 'conexao.php';

$resultado = $banco->logar($_POST["EMAIL"], $_POST["SENHA"]);


if($resultado) {
  header("location: ../../index.php");
} else {
  header("location: ../../pages/login.php");
}









?>