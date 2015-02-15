<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <?php echo $this->Html->css('framework/bootstrap'); ?>
    <?php echo $this->Html->css('style'); ?>
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="wrapper">
	<div class="overplay"></div><!-- /.overplay -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar" role="navigation" >
				<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
						<a href="">Chuntime</a>
					</li><!-- /.sidebar-brand -->
					<li><a href="#">New Feeds</a></li>
					<li><a href="#">Settings</a></li>
				</ul><!-- /.nav -->
		</nav><!-- /.navbar -->
		<!-- Content -->
	<div id="page-content-wrapper">
		<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
			<span class="hamb-top"></span>
			<span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
		</button>
		<?php echo $this->fetch('content'); ?>
	</div><!-- /#page-content -->
	</div><!-- /#wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
</body>
</html>