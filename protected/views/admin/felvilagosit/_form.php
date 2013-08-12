<?php
/* @var $this FelvilagositController */
/* @var $model Felvilagosit */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'felvilagosit-form',
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
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rovid'); ?>
		<?php echo $form->textField($model,'rovid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rovid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hosszu'); ?>
		<?php echo $form->textArea($model,'hosszu',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hosszu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'megjegyzes'); ?>
		<?php echo $form->textField($model,'megjegyzes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'megjegyzes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->