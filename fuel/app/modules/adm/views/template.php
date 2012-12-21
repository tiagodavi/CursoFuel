<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>MiniCurso Online: FuelPHP - Uso do combustível na prática</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MiniCurso Online: FuelPHP - Uso do combustível na prática">
    <meta name="author" content="Tiago Davi">

    <!-- Le styles -->
    <?php echo Asset::css('bootstrap.min.css'); ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
		<?php echo Asset::css('bootstrap-responsive.min.css'); ?>
   
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

  <body>


<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Curso FuelPHP - 3visoes.com.br</a>        
      </div>
    </div><!-- /navbar-inner -->
  </div>

	<div class="container">

		<?php if(isset($content)) echo $content; ?>
		
		<footer>
			<p>&copy; 3visoes.com.br 2012</p>
		</footer>

	</div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>		
    <?php echo Asset::js('bootstrap.min.js'); ?>
    
  </body>
</html>