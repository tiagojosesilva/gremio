<?php
session_start();

//Incluir conexao com BD
include_once("banco/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);
$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
$start = filter_input(INPUT_POST, 'start', FILTER_SANITIZE_STRING);
$end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);

if(!empty($id) && !empty($title) && !empty($local) && !empty($color) && !empty($start) && !empty($end)){
	//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
	$data = explode(" ", $start);
	list($date, $hora) = $data;
	$data_sem_barra = array_reverse(explode("/", $date));
	$data_sem_barra = implode("-", $data_sem_barra);
	$start_sem_barra = $data_sem_barra . " " . $hora;
	
	$data = explode(" ", $end);
	list($date, $hora) = $data;
	$data_sem_barra = array_reverse(explode("/", $date));
	$data_sem_barra = implode("-", $data_sem_barra);
	$end_sem_barra = $data_sem_barra . " " . $hora;
	
	$update = $pdo->prepare("UPDATE events SET title = ?, local = ?, color = ?, start = ?, end = ? WHERE id = ?");
	$update->execute([$title,$local,$color,$start_sem_barra,$end_sem_barra,$id]);

	if($update->rowCount() > 0){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento editado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: calendario.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao editar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: calendario.php");
	}
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao editar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	header("Location: calendario.php");
}