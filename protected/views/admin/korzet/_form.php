<?php
/* @var $this KorzetController */
/* @var $model Korzet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'korzet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'irszam'); ?>
		<?php echo $form->textField($model,'irszam'); ?>
		<?php echo $form->error($model,'irszam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utca'); ?>
		<?php echo $form->textField($model,'utca',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'utca'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'megjegyzes'); ?>
		<?php echo $form->textField($model,'megjegyzes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'megjegyzes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kezdo_szam_paros'); ?>
		<?php echo $form->textField($model,'kezdo_szam_paros',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kezdo_szam_paros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'veg_szam_paros'); ?>
		<?php echo $form->textField($model,'veg_szam_paros',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'veg_szam_paros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kezdo_szam_paratlan'); ?>
		<?php echo $form->textField($model,'kezdo_szam_paratlan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kezdo_szam_paratlan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'veg_szam_paratlan'); ?>
		<?php echo $form->textField($model,'veg_szam_paratlan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'veg_szam_paratlan'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Mentés' : 'Felülírás!!!'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->