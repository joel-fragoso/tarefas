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
