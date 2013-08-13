<?php
/* @var $this ConfigController */

$this->breadcrumbs=array(
	'Config',
);
?>
<?php echo $this->renderPartial('../_title'); ?>
<div class="container">
	<div id="edit" style="width: 600px;">
		<form action="{$smarty.server.PHP_SELF}?mod=config" method="post" enctype="multipart/form-data">
			<fieldset>
			<legend>Felhasználói beállítások</legend>
			<div class="fieldset_content">
			{php}
			text('cegnev', 'Cégnév:', '', 30);
			text('adoszam',	'Adószám:',	'', 30);
			text('cegjegyzekszam',	'Cégjegyzékszám:',	'', 30);
			text('telefonszam',	'Telefonszám:',	'',	30);
			text('fax',	'Fax:',	'',	30);
			text('email_oldal', 'Oldal email címe:', '', 30);
			text('email_oldal_name', 'Oldal email megjelenítendő név:', '', 30);
			text('email_admin', 'Adminisztrátor email címe:', '', 30);
			text('domain', 'Oldal domain:', '', 30);
			text('email_dev', 'Fejlesztő email címe:', '', 30);
			upload('image_logo', 'Logó feltöltése:', '', '');
            upload('favicon_logo', 'Favicon logó feltöltése:', '', '');
			{/php}
			</div>
			</fieldset>
			<fieldset>
			<legend>Cím adatok</legend>
			<div class="fieldset_content">
			{php}
			text('cim', 'Cím:', '', 30);
			text('iranyitoszam', 'Irányítószám:', '', 3);
			text('varos', 'Település:', '', 30);
			{/php}
			</div>
			</fieldset>
			<fieldset>
			<legend>Postacím</legend>
			<div class="fieldset_content">
			{php}
			text('posta_cim', 'Cím:', '', 30);
			text('posta_iranyitoszam', 'Irányítószám:', '', 3);
			text('posta_varos', 'Település:', '', 30);
			{/php}
			</div>
			</fieldset>
			<fieldset>
			<legend>Nyitvatartás</legend>
			<div class="fieldset_content">
			{php}
			checkbox('opening_hours', 'Nyitvatartás megjelenítése az oldalon');
			text('hetfo', 'Hétfő:',	'', 10);
			text('kedd', 'Kedd:',	'', 10);
			text('szerda', 'Szerda:',	'', 10);
			text('csutortok', 'Csütörtök:',	'', 10);
			text('pentek', 'Péntek:',	'', 10);
			text('szombat', 'Szombat:',	'', 10);
			text('vasarnap', 'Vasárnap:',	'', 10);
			{/php}
			</div>
			</fieldset>
			<fieldset>
			<legend>Oldal beállítások</legend>
			<div class="fieldset_content">
			{php}
			checkbox('animacio', 'Animációk bekapcsolása');
			checkbox('szerviz', 'Szerviz üzemmód (Az oldal helyett "karbantartás" üzenet jelenik meg)');
			{/php}
			</div>
			</fieldset>
			<fieldset>
			<legend>Google Analytics követőkód</legend>
			<div class="fieldset_content">
			{php}
			textarea('analytics_code', 'Ide másolja a követőkódot:', '', 70, 3);
			{/php}
			</div>
			</fieldset>
			{include file="_submit.php"}
		</form>
			{php}
			unset($_SESSION['tarolo']);
			unset($_SESSION['hiba']);
			{/php}
	</div>
</div>