<?php
namespace cedcoss\yii2hello\views;

use Yii;
use cedcoss\yii2hello;

$path = Yii::$app->request->baseUrl ."/../vendor/cedcoss/yii2-hello/";
?>
<link href="<?= $path ?>assets/css/<?= $theme ?>.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= Yii::$app->request->baseUrl; ?>"><?= $logo?></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right ced-menu">
				<?= $menu?>
			</ul>
		</div>
	</div>
</nav>

<script src="<?= $path ?>assets/js/jquery-1.11.2.min.js"></script>
<script src="<?= $path ?>assets/js/bootstrap.min.js"></script>

