<?php
require_once('conexao.php');

return $selectAll = $pdo->query("SELECT * FROM events");
