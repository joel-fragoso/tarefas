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
					<h1>Tarefa: <?php echo $tarefa['nome'];	?></h1>
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-12">
					<p>
						<a href="index.php">Voltar para a lista de tarefas</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p>Descrição: <?php echo $tarefa['descricao']; ?></p>
				</div class="col-12">
			</div>
			<div class="row">
				<div class="col-12">
					<p>Prazo: <?php echo traduz_data_para_exibir($tarefa['prazo']); ?></p>
				</div class="col-12">
			</div>
			<div class="row">
				<div class="col-12">
					<p>Prioridade: <?php echo traduz_prioridade($tarefa['prioridade']); ?></p>
				</div class="col-12">
			</div>
			<div class="row">
				<div class="col-12">
					<p>Concluída: <?php echo traduz_concluida($tarefa['concluida']); ?></p>
				</div class="col-12">
			</div>
			<div class="row">
				<div class="col-12">
					<h2>Anexos</h2>
				</div>
			</div>
			<?php if (count($anexos) > 0) : ?>
				<div class="row">
					<div class="col-12">
						<table class="table table-stripped">
							<tr>
								<th>Arquivo</th>
								<th>Opções</th>
							</tr>
							<?php foreach ($anexos as $anexo) : ?>
								<tr>
									<td><?php echo $anexo['nome']; ?></td>
									<td>
										<a class="btn btn-small btn-success" href="anexos/<?php echo $anexo['arquivo']; ?>" target="_blank">Download</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			<?php else : ?>
				<div class="row">
					<div class="col-12">
						<p>Não há anexos para esta tarefa.</p>
					</div>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-12">
					<form method="post" enctype="multipart/form-data">
						<fieldset>
							<legend>Novo anexo</legend>
							<input type="hidden" name="tarefa_id" value="<?php echo $tarefa['id']; ?>">
							<?php if ($tem_erros && isset($erros_validacao['anexo'])) : ?>
								<div class="row">
									<div class="offset-3 col-9">
										<span class="error"><?php echo $erros_validacao['anexo']; ?></span>
									</div>
								</div>
							<?php endif; ?>
							<div class="row">
								<div class="col-3">
									<label>Anexo:</label>
								</div>
								<div class="col-9">
									<input type="file" name="anexo">
								</div>
							</div>
							<div class="row">
								<div class="offset-3 col-9">
									<input class="btn btn-primary" type="submit" value="Cadastrar">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.container -->
	</body>
</html>