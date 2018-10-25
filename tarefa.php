<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

include "banco.php";
include "ajudantes.php";

$tem_erros = false;
$erros_validacao = array();

if (tem_post()) {
	$tarefa_id = $_POST['tarefa_id'];

	if (isset($_FILES['anexo']) && ($_FILES['anexo']['name'] === '')) {
		$tem_erros = true;
		$erros_validacao['anexo'] = 'Você deve selecionar um arquivo para anexar';
	} else {
		if (tratar_anexo($_FILES['anexo'])) {
			$anexo = array();
			$anexo['tarefa_id'] = $tarefa_id;
			$anexo['nome']      = $_FILES['anexo']['name'];
			$anexo['arquivo']   = $_FILES['anexo']['name'];
		} else {
			$tem_erros = true;
			$erros_validacao['anexo'] = 'Envie apenas anexos nos formatos zip ou pdf';
		}
	}

	if (!$tem_erros) {
		gravar_anexo($conn, $anexo);
	}
}

$tarefa = buscar_tarefa($conn, $_GET['id']);
$anexos = buscar_anexos($conn, $_GET['id']);

include 'template_tarefa.php';
