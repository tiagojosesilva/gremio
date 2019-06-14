<?php
	$usuario = "root";
	$senha = "aslap";
	
	$pdo = new PDO('mysql:host=localhost;dbname=gremio', $usuario, $senha);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>