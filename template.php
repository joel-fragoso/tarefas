<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE-Edge, Chrome=1">
		<title>Tarefas</title>
		<link rel="stylesheet" href="assets/css/app.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Gerenciador de tarefas</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<form>
						<fieldset>
							<legend>Nova tarefa</legend>
							<div class="row">
								<div class="col-2">
									<label>Tarefas:</label>
								</div>
								<div class="col-10">
									<input type="text" name="nome">
								</div>
							</div>
							<div class="row">
								<div class="offset-2 col-10">
									<input class="btn btn-primary" type="submit" value="Cadastrar">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table table-stripped">
						<tr>
							<th>Tarefas</th>
						</tr>
						<?php foreach ($lista_tarefas as $tarefa) : ?>
							<tr>
								<td><?php echo $tarefa; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div><!-- /.container -->
	</body>
</html>