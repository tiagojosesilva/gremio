<?php
session_start();
include_once("../../php/conn.php");



$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
$start = filter_input(INPUT_POST, 'start', FILTER_SANITIZE_STRING);
$end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);

//if(!empty($title) && !empty($color) && !empty($start) && !empty($end)){
		//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
// 	$data = explode(" ", $start); 
// 	list($date, $hora) = $data;
// 	$data_sem_barra = array_reverse(explode("/", $date));
// 	$data_sem_barra = implode("-", $data_sem_barra);	
// 	$start_sem_barra =	$data_sem_barra . " " . $hora;

// 	$data = explode(" ", $end);
// 	list($date, $hora) = $data;
// 	$data_sem_barra = array_reverse(explode("/", $date));
// 	$data_sem_barra = implode("-", $data_sem_barra);	
// 	$end_sem_barra =	$data_sem_barra . " " . $hora;

// 	$result_events = "INSERT INTO events (title, color, start, end) VALUES ('$title', '$color', '$start_sem_barra', '$end_sem_barra')";
// 	$resultado_events = mysqli_query($conn, $result_events);

// 	//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido

// 	if(mysqli_insert_id($conn)){
// 		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Evento cadastrado com sucesso <button type='button class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
// 	header("Location: calendario.php");

// 	} else {
// 		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento <button type='button class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
// 	header("Location: calendario.php");

// 	}

// } else {
// 	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento <button type='button class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
// 	header("Location: calendario.php");
// }
	$a = $conn -> prepare("INSERT INTO events SET title=?, color=?, start=?, end=?");
	$b = $a -> execute([$title, $color, $start, $end]); 
	echo 'OK';
	
// }
// echo 'ERRO';

?>