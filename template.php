<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE-Edge, Chrome=1">
		<title>Gerenciador de tarefas</title>
		<link rel="stylesheet" href="assets/css/app.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Gerenciador de tarefas</h1>
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
			<!-- FORMULÁRIO -->
			<?php include "formulario.php"; ?>
			<!-- TABELA -->
			<?php if ($exibir_tabela) : ?>
				<?php include "tabela.php"; ?>
			<?php endif; ?>
		</div><!-- /.container -->
	</body>
</html>