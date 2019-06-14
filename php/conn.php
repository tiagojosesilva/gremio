<?php 
$dbuser = "root";
$dbpw = "aslap";
try {
  $conn = new PDO('mysql:host=localhost;dbname=gremio', 'root', 'aslap');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	  echo 'Erro: ' . $e->getMessage();
}
 ?>