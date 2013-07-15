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
<?php /*
<script type="text/javascript">
{literal}
$(document).ready(function(){

	function keep_alive(){
			$.ajax({
				  url: 'admin.php',
				  data: 'mod=keep_alive&ajax=true',
				  type: "POST",
				  context: document.body,
				  success: function(data){
					if(data != '1'){
						alert('A kapcsolat megszakadt! További munka folytatása előtt kérem jelentkezzen be újra! Ha nem akarja, hogy a még nem mentett adatok elvesszenek, jelentkezzen be új böngészőablakban, majd mentse a munkát.');
					}
				  }
			});
	}
	intervalID=setInterval(keep_alive,300000);

	$("#message").hide().fadeIn();
	$('.message_sima, .message_siker, .message_hiba').click(function(){ $(this).fadeOut(); });
	setTimeout(function(){ $("#message").fadeOut(); }, 8000);

	$('table#lista tr').live('click', function(){
		var url=$(this).find('a').attr('href');
		window.location.href = url;
	});
	$('table#lista tr td.ex').live('click', function(event){
		event.stopPropagation();
	});

{/literal}
{if $config.animacio == "on"}
{literal}

	$('#header ul li a').live('click', function(event){
		event.preventDefault();
		
		$('#main_content').slideUp(200);
		$('#footer').delay(200).slideUp(200);
		$('div:last').after('<div class="container" id="ajax_loader"><img src="admin/images/ajax_loader.gif" /></div>');
		
		var current_url = $(this).attr('href');
		var url_array=current_url.split('?');

		$('#ajax_loader').ready(function(){
			
			$.ajax({
				  url: 'admin.php',
				  data: url_array[1]+'&ajax=true',
				  type: "POST",
				  context: document.body,
				  success: function(data){
					$('#main_content').delay(400).html(data).slideDown(400);
					$('#footer').delay(800).slideDown(200);
					$('#ajax_loader').delay(1000).fadeOut(300).delay(1300).remove();
					window.location.href=current_url;
				  }
			});

		});

	});

{/literal}
{/if}
{literal}
	
});
{/literal}
</script>
 * */ ?>

</head>
<body>
{include file="keret_message.php"} // kiváltandó!!!
	<div class="container" id="header">
		<div id="logo"><img src="" alt="<?php echo CHtml::encode(Yii::app()->name); ?>" /></div>
		<div id="menu">
			<ul>
				<li><a href="<?php echo $bUrl; ?>/home"><img src="<?php echo $bUrl; ?>/images/admin/_menu_home.png" /> Kezdőlap</a></li>
				<li><a href="<?php echo $bUrl; ?>/admin/statikus"><img src="<?php echo $bUrl; ?>/images/admin/_menu_content.png" /> Modulok <img src="<?php echo $bUrl; ?>/images/admin/_menu_dropdown_arrow.png" /> </a>
					<ul class="dropdown">
						<li><a href="<?php echo $bUrl?>/admin/content/">Tartalmi oldalak</a></li>
					<!--	<li><a href="{$smarty.server.PHP_SELF}?mod=ajanlatkero">Ajánlatkérések</a></li> -->
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
						<li><a href="<?php echo $bUrl; ?>/admin/user"><img src="<?php echo $bUrl; ?>/images/admin/settings_pswd_chng.png" />Jelszóváltoztatás</a></li>
						<li><a href="<?php echo $bUrl; ?>/site/athelyezendo"><img src="<?php echo $bUrl; ?>/images/admin/settings_users.png" />Adminisztrátorok kezelése</a></li>
						<li><a href="<?php echo $bUrl; ?>/site/athelyezendo"><img src="<?php echo $bUrl; ?>/images/admin/settings_db_backup.png" />Adatbázis mentés</a></li>
						<li><a href="<?php echo $bUrl; ?>/site/athelyezendo"><img src="<?php echo $bUrl; ?>/images/admin/settings_site.png" />Oldal beállításai</a></li>
						<li><a href="<?php echo $bUrl; ?>/site/athelyezendo"><img src="<?php echo $bUrl; ?>/images/admin/settings_help.png" />Információ, segítségkérés</a></li>
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
			'title'=>'Operations',
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
