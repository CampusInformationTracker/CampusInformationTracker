<?php

/**
 * default.ctp
 * @author supernova_explosions <supernova.explosions@gmail.com>
 * @copyright Copyright (C) 2013 CIT Project All rights reserved.
 */

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->charset(); ?>　
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">　
<?php echo $this->Html->css("/bootstrap-3.0.0/css/bootstrap.min.css"); ?>　
<?php echo $this->Html->css("font-awesome.min.css"); ?>　
<!--[if IE 7]>
	<?php echo $this->Html->css("font-awesome-ie7.min.css"); ?>　
<![endif]-->
<?php echo $this->Html->script("jquery-1.10.2.min.js"); ?>　
<?php echo $this->Html->script("/bootstrap-3.0.0/js/bootstrap.min.js"); ?>　
<?php echo $this->fetch("meta"); ?>
<?php echo $this->fetch("css"); ?>
<?php echo $this->fetch("script"); ?>
<title><?php echo $title_for_layout; ?></title>
</head>
<body>
<article class="container">
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch("content"); ?>
		</div>
	</div>
</article>
<footer>
	<div class="container">
		<p class="text-right">Copyright &copy; 2013 CIT Project All rights reserved.</p> 
	</div>
</footer>
<?php echo $this->element("sql_dump"); ?>
</body>
</html>