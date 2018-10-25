<div class="row">
	<div class="col-12">
		<form method="post">
			<fieldset>
				<legend>Nova tarefa</legend>
				<input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
				<?php if ($tem_erros && isset($erros_validacao['nome'])) : ?>
					<div class="row">
						<div class="offset-3 col-9">
							<span class="error"><?php echo $erros_validacao['nome']; ?></span>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-3">
						<label>Tarefas:</label>
					</div>
					<div class="col-9">
						<input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label>Descrição (Opcional):</label>
					</div>
					<div class="col-9">
						<textarea name="descricao"><?php echo $tarefa['descricao']; ?></textarea>
					</div>
				</div>
				<?php if ($tem_erros && isset($erros_validacao['prazo'])) : ?>
					<div class="row">
						<div class="offset-3 col-9">
							<span class="error"><?php echo $erros_validacao['prazo']; ?></span>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-3">
						<label>Prazo (Opcional):</label>
					</div>
					<div class="col-9">
						<input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label>Prioridade:</label>
					</div>
					<div class="col-9">
						<input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>>&nbsp;Baixa
						<input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?>>&nbsp;Média
						<input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?>>&nbsp;Alta
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label>Tarefa concluída:</label>
					</div>
					<div class="col-9">
						<input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?>>
					</div>
				</div>
				<div class="row">
					<div class="offset-3 col-9">
						<input class="btn btn-primary" type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>">
					</div>
				</div>
			</fieldset>
		</form>
	</div><!-- /.col-12 -->
</div><!-- /.row -->