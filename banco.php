<?php

$host = '192.168.1.31';
$user = 'mariadb';
$pass = 'root';
$name = 'test';

$conn = mysqli_connect($host, $user, $pass, $name);

if (mysqli_connect_errno($conn)) {
	echo "Problemas para conectar no banco, Verifique os dados!";
	die;
}