 <h1>Lista de fornecedores</h1>
 <?php echo Html::anchor("adm/fornecedores/novo", 'Novo Fornecedor', array('class'	=> 'btn btn-primary')); ?>
 <table class="table table-striped">
		<thead>
			<tr>				
				<th>Nome</th>
				<th>Código</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			<?php if($fornecedores): ?>
				<?php array_walk($fornecedores, function($f){ ?>
					<tr>					
						<td><?php echo $f['nome']; ?></td>
						<td><?php echo $f['codigo']; ?></td>
						<td>
							<?php echo Html::anchor("adm/fornecedores/editar/{$f['id']}", '', array('class'	=> 'icon-pencil')); ?>
							<?php echo Html::anchor("adm/fornecedores/deletar/{$f['id']}", '', array('class'	=> 'icon-trash')); ?>
						</td>
					</tr>					
				<?php }); ?>
				<?php else: ?>
				 <tr>					
					 <td colspan="3">Nenhum fornecedor encontrado</td>
				 </tr>
			<?php endif; ?>		
		</tbody>
  </table>