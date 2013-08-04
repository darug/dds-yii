<?php
/* @var $this KorzetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Korzets',
);
/*
$this->menu=array(
	array('label'=>'Create Korzet', 'url'=>array('create')),
	array('label'=>'Manage Korzet', 'url'=>array('admin')),
); */
?>

<h1>Körzet ellenőrzés</h1>
<p> Kérjük kezdje el bevinni a címét az utca alatti keretbe, ha az első betük bevitele után látszódik keresett név, 
	akkor kattintson rá és nyomjon entert vagy kattintson a "Keresés" gombra.
</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'korzet-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'utca'); ?>
		<?php echo $form->textField($model,'utca',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'utca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Keresés'); ?>
	</div>
<?php $this->endWidget(); ?>

<p class="<?php echo $color; ?>">
<?php if(isset($uzenet)){ echo "$uzenet"; } ?>
</p>
<pre>
<?php
/*print_r($record);
echo $record->utca."<br>";
echo $record->id."<br>";
echo $record->kezdo_szam_paros."<br>";
echo $record->kezdo_szam_paratlan."<br>";*/
?>
</pre>