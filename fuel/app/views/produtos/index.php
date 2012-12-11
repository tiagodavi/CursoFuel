<!DOCTYPE html>
	<html>
		<meta charset="utf8">
		<ul>
			<?php array_walk($produtos, function(&$produto){ ?>
				<li><?php echo $produto; ?></li>
			<?php }); ?>			
		</ul>
	</html>