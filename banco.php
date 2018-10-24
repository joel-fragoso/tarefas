<?php

$host = '127.0.0.1';
$user = 'mariadb';
$pass = 'root';
$name = 'test';

$conn = mysqli_connect($host, $user, $pass, $name);

if (mysqli_connect_errno($conn)) {
	echo "Problemas para conectar no banco, Verifique os dados!";
	die;
}

function buscar_tarefas($conn) {
	$sql = "SELECT * FROM tarefas";
	$res = mysqli_query($conn, $sql);

	$tarefas = array();

	while ($tarefa = mysqli_fetch_assoc($res)) {
		$tarefas[] = $tarefa;
	}

	return $tarefas;
}

function buscar_tarefa($conn, $id) {
	$sql = "SELECT * FROM tarefas WHERE id = {$id}";
	$res = mysqli_query($conn, $sql);
	return mysqli_fetch_assoc($res);
}

function gravar_tarefa($conn, $tarefa) {
	$sql = "INSERT INTO tarefas 
					(
						nome, 
						descricao, 
						prazo, 
						prioridade, 
						concluida
					) 
					VALUES 
					(
						'{$tarefa['nome']}', 
						'{$tarefa['descricao']}', 
						'{$tarefa['prazo']}', 
						'{$tarefa['prioridade']}', 
						'{$tarefa['concluida']}'
					)";

	mysqli_query($conn, $sql);
}

function editar_tarefa($conn, $tarefa) {
	$sql = "UPDATE tarefas SET
				 		nome = '{$tarefa['nome']}',
				 		descricao = '{$tarefa['descricao']}',
				 		prazo = '{$tarefa['prazo']}',
				 		prioridade = '{$tarefa['prioridade']}',
				 		concluida = '{$tarefa['concluida']}'
				 	WHERE id = {$tarefa['id']}";

	mysqli_query($conn, $sql);
}

function remover_tarefa($conn, $id) {
	$sql = "DELETE FROM tarefas WHERE id = {$id}";

	mysqli_query($conn, $sql);
}
