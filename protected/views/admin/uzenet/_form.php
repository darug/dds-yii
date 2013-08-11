<?php
/* @var $this UzenetController */
/* @var $model Uzenet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'uzenet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">A <span class="required">*</span>-gal jelölt mezök kitöltése kötelező!</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uzenet'); ?>
		<?php echo $form->textField($model,'uzenet',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'uzenet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ervenyes'); ?>
		<?php echo $form->textField($model,'ervenyes'); ?>
		<?php echo $form->error($model,'ervenyes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'megjegyzes'); ?>
		<?php echo $form->textField($model,'megjegyzes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'megjegyzes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid'); ?>
		<?php echo $form->textField($model,'valid'); ?>
		<?php echo $form->error($model,'valid'); ?>
	</div>

	<div class="row buttons">
		<?php echo $this->renderPartial('../_submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->