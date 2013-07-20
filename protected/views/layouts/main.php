<?php /* @var $this Controller */ 
$bUrl=Yii::app()->request->baseUrl;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<?php $bUrl = Yii::app()->request->baseUrl; ?>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $bUrl; ?>/css/form.css" />
<scipt type="javscript">
	<src="<?php echo $bUrl; ?>/js/jquery-1.7.min.js>
</scipt>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

<!--	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div> -- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Kezdőoldal', 'url'=>array('/home')),
				array('label'=>'Rendelési idő', 'url'=>array('/rendel')),
				array('label'=>'Elérhetőség/üzenet küldés', 'url'=>array('/site/contact')),
				array('label'=>'Bejelntkezés', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Kijelentkezés ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); */?><!-- breadcrumbs -->
	<?php endif?>
	<p class="info">
	<?php // aktualis idofuggo informaciok kiirasa
		$rendido = new RendelesiIdo();
		echo $rendido->info();
	?>
	</p>
	<p class="uzenet">
	<?php // aktualis idofuggo informaciok kiirasa
		$uzenet = new Uzenet();
		echo $uzenet->info();
	?>
	</p>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by DD Standard Kft.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>