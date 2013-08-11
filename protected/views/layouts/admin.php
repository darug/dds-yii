<?php /* @var $this Controller */
$bUrl=Yii::app()->request->baseUrl;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?> Adminisztrációs felület</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="shortcut icon" href="admin/images/logo.png" />

	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/admin_main.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/admin_login2.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/admin_form.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/js/ckeditor/contents.css" media="screen, projection" />
	<script src="<?php echo $bUrl; ?>/js/ckeditor/ckeditor.js"  > </script>
	<script src="<?php echo $bUrl; ?>/js/ckeditor/config.js" > </script>
</head>
<body>
{include file="keret_message.php"} // kiváltandó!!!
	<div class="container" id="header">
		<div id="logo"><img src="" alt="<?php echo CHtml::encode(Yii::app()->name); ?>" /></div>
		<div id="menu">
			<ul>
				<li><a href="<?php echo $bUrl; ?>/admin"><img src="<?php echo $bUrl; ?>/images/admin/_menu_home.png" /> Kezdőlap</a></li>
				<li><a href="<?php echo $bUrl; ?>/admin/content"><img src="<?php echo $bUrl; ?>/images/admin/_menu_content.png" /> Modulok <img src="<?php echo $bUrl; ?>/images/admin/_menu_dropdown_arrow.png" /> </a>
					<ul class="dropdown">
						<?php echo $this->renderPartial('../_modules'); ?>
					</ul>
				</li>
			</ul>
		</div>
		<span id="right_menu">
			<span id="logged_name">Bejelentkezve: <?php echo Yii::app()->user->name; ?></span><br class="float_right" />
			<span id="settings">
				<a class="settings" href="">Beállítások </a>
				<a class="logout" href="<?php echo $bUrl; ?>/site/logout" title="Kilépés"></a>
					<ul class="settings_dropdown">
						<?php echo $this->renderPartial('../_settings'); ?>
					</ul>
			</span>
		</span>
	</div>
	div class="span-5 last">
	//almenu innet kiveve
</div><!--  ??-->
	<div class="container" id="header_helper">
	</div>
		<div id="sidebar">
	<?php //előző sorral együtt ??-> jelig beszúrva 2013.07.0.6 oDG
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Műveletek',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->

	<div class="container" id="main_content">
		<?php echo $content; ?>
	</div>
	<div class="container" id="footer">
		<span style="float:left;">DD Standard Adminisztrációs Felület v3.0 Copyright &copy; <?php echo date('Y'); ?> by DD Standard Kft.
		 	All Rights Reserved.<br/>
		</span>
		<span style="float: right"><a href="http://www.ddstandard.hu" target="_blank">www.ddstandard.hu</a></span>
		<br><br><br>
		<p style="center"><?php echo Yii::powered(); ?></p>
	</div>
</body>
</html>
