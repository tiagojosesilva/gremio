<?php 

$dbuser = "id8920358_gremio";
$dbpw = "projeto12345";
try {
  $conn = new PDO('mysql:host=localhost;dbname=id8920358_gremio', $dbuser, $dbpw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	  echo 'Erro: ' . $e->getMessage();
}
 ?>