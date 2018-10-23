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
								<div class="col-2">
									<label>Descrição (Opcional):</label>
								</div>
								<div class="col-10">
									<textarea name="descricao"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label>Prazo (Opcional):</label>
								</div>
								<div class="col-10">
									<input type="text" name="prazo">
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label>Prioridade:</label>
								</div>
								<div class="col-10">
									<input type="radio" name="prioridade" value="baixa" checked="on">&nbsp;Baixa
									<input type="radio" name="prioridade" value="media">&nbsp;Média
									<input type="radio" name="prioridade" value="alta">&nbsp;Alta
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<label>Tarefa concluída</label>
								</div>
								<div class="col-10">
									<input type="checkbox" name="concluida" value="sim">
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
							<th>Descrição</th>
							<th>Prazo</th>
							<th>Prioridade</th>
							<th>Concluída</th>
						</tr>
						<?php foreach ($lista_tarefas as $tarefa) : ?>
							<tr>
								<td><?php echo $tarefa['nome']; ?></td>
								<td><?php echo $tarefa['descricao']; ?></td>
								<td><?php echo $tarefa['prazo']; ?></td>
								<td><?php echo $tarefa['prioridade']; ?></td>
								<td><?php echo $tarefa['concluida']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div><!-- /.container -->
	</body>
</html>