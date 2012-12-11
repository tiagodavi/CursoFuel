<ul>
	<?php array_walk($vendas, function($venda) use($upper){ ?>
		<li><?php echo $upper($venda['nome']); ?> vendidos: <?php echo $venda['vendidos']; ?></li>		
	<?php }); ?>
</ul>