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

		<?php //viszintesen a Content-bolautomatikusan bővülő menü
		$record = Content::model()->findAll();
		$n=count($record);
		$menu1="";
		for($i=1;$i<$n;$i++){if($record[$i]['contact_finish']>'')
		{
			$menu1.="<li><a href=\"$bUrl/".$record[$i]['name']."\"><img src=\"$bUrl/images/admin/_menu_content.png\" /> ".$record[$i]['contact_finish']."</a></li>\n";
		}
		}
		$rec = Felvilagosit::model()->findAll(); //automatikusan bővülő dropdown menü
		$n=count($rec);
		$menu2="";
		for($i=0;$i<$n;$i++){
			if(strpos($rec[$i]['link'],'://')){$href=$rec[$i]['link'];}
			else{$href=$bUrl.'/'.$rec[$i]['link'];}
			$menu2.="<li><a href=\"$href\"> ".$rec[$i]['title']." </a></li>\n";
		}	
?>
		<div id="menu">
			<ul>
				<li><a href="<?php echo $bUrl.'/'.$record[0]['name']; ?>"><img src="<?php echo $bUrl; ?>/images/admin/_menu_home.png" /> Kezdőlap</a></li>
				<?php echo $menu1; ?>
			    <li><a href="<?php echo $bUrl; ?>/felvilagosit/index"><img src="<?php echo $bUrl; ?>/images/admin/_menu_content.png" /> Tájékoztatas <img src="<?php echo $bUrl; ?>/images/admin/_menu_dropdown_arrow.png" /> </a>
					<ul class="dropdown">
						<?php echo $menu2; ?>
				</ul> 
				</li>
				<li><a href="<?php echo $bUrl; ?>/korzet/index"><img src="<?php echo $bUrl; ?>/images/admin/_menu_content.png" /> Körzet ellenőrzés </a></li>
				<!-- ide kell beszurni az uzenet menu-t!! -->
			 </ul>
		</div>
<?php	/*	
		$this->widget('zii.widgets.CMenu',array(
			'items'=>$menu,
		));*/ ?>
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
	<?php // aktualis idofuggo informaciok kiirasa
		$uzenet = new Uzenet();
		if($uzenet->info()){
		?><p class="uzenet"><?php
		
			echo $uzenet->info();
		
		?></p><?php
		}
	?>
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