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
<?php echo $this->Html->css("common.css"); ?> 
<?php echo $this->Html->script("jquery-1.10.2.min.js"); ?>　
<?php echo $this->Html->script("/bootstrap-3.0.0/js/bootstrap.min.js"); ?>　
<?php echo $this->fetch("meta"); ?>
<?php echo $this->fetch("css"); ?>
<?php echo $this->fetch("script"); ?>
<title><?php echo $title_for_layout; ?></title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link("Campus Information Tracker", "/", array("class" => "navbar-brand")); ?> 
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><?php echo $this->Html->link("<i class=\"fa fa-info-circle\"></i> お知らせ", "#", array("escape" => false)); ?></li>
				<li><?php echo $this->Html->link("<i class=\"fa fa-envelope-o\"></i> メッセージ", "#", array("escape" => false)); ?></li>
				<li class="dropdown">
					<?php echo $this->Html->link("<i class=\"fa fa-bell-o\"></i> 講義情報 <b class=\"caret\"></b>", "#", array("class" => "dropdown-toggle", "data-toggle" => "dropdown", "escape" => false)); ?> 
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link("<span class=\"badge pull-right\">3</span>休講情報", "#", array("escape" => false)); ?></li>
						<li><?php echo $this->Html->link("<span class=\"badge pull-right\">6</span>補講情報", "#", array("escape" => false)); ?></li>
						<li><?php echo $this->Html->link("<span class=\"badge pull-right\">1</span>時間割変更", "#", array("escape" => false)); ?></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<?php echo $this->Html->link("<i class=\"fa fa-user\"></i> 工大 太郎 <b class=\"caret\"></b>", "#", array("class" => "dropdown-toggle", "data-toggle" => "dropdown", "escape" => false)); ?> 
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link("履修一覧", "#"); ?></li>
						<li><?php echo $this->Html->link("設定", "#"); ?></li>
						<li class="divider"></li>
						<li><?php echo $this->Html->link("ログアウト", "#"); ?></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
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