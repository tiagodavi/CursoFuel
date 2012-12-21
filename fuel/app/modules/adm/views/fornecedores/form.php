<h1><?php echo $titulo; ?></h1>
<?php echo Form::open('adm/fornecedores/salvar'); ?>
  <input type="hidden" name="fornecedor[id]" value="<?php echo $fornecedor->id; ?>">
	<p>
		<input class="input-xlarge" type="text" placeholder="Nome" 	name="fornecedor[nome]" 	 value="<?php echo $fornecedor->nome; ?>" required>
		<input class="input-xlarge" type="text" placeholder="Código" name="fornecedor[codigo]" value="<?php echo $fornecedor->codigo; ?>" required>
	</p>
	<p>
		<button class="btn btn-success" type="submit">Salvar</button>
		<?php echo Html::anchor('adm/fornecedores/', 'Cancelar', array('class'	=> 'btn btn-danger')); ?>
	</p>
<?php echo Form::close(); ?>