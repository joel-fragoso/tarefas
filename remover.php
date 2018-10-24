<?php

include "banco.php";

remover_tarefa($conn, $_GET['id']);

header('Location: index.php');
