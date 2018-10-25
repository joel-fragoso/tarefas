<?php

function traduz_prioridade($codigo) {
	$prioridade = '';

	switch ($codigo) {
		case 1:
			$prioridade = 'Baixa';
		break;
		case 2:
			$prioridade = 'Média';
		break;
		case 3:
			$prioridade = 'Alta';
		break;
	}

	return $prioridade;
}

function traduz_data_para_banco($data) {
	if ($data == '') {
		return '';
	}

	$dados = explode('/', $data);

	if (count($dados) != 3) {
		return $data;
	}

	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

	return $data_mysql;
}

function traduz_data_para_exibir($data) {
	if ($data == '' OR $data == '0000-00-00') {
		return '';
	}

	$dados = explode('-', $data);

	if (count($dados) != 3) {
		return $data;
	}

	$data_mysql = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

	return $data_mysql;
}

function traduz_concluida($concluida) {
	if ($concluida == 1) {
		return 'Sim';
	}

	return 'Não';
}

function tem_post() {
	if (count($_POST) > 0) {
		return true;
	}

	return false;
}

function validar_data($data) {
	$pattern = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
	$result  = preg_match($pattern, $data);

	if (!$result) {
		return false;
	}

	$dados = explode('/', $data);

	$dia = $dados[0];
	$mes = $dados[1];
	$ano = $dados[2];

	$result = checkdate($mes, $dia, $ano);

	return $result;
}

function tratar_anexo($anexo) {
	$pattern = '/^.+(\.pdf|\.zip)$/';
	$result  = preg_match($pattern, $anexo['name']);

	if (!$result) {
		return false;
	}

	move_uploaded_file($anexo['tmp_name'], "anexos/{$anexo['name']}");

	return true;
}
