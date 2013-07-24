<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">A <span class="required">*</span>-gal jelölt mezők kitöltése kötelező!</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id');?>
	<?php if(!$this->fadmin){ echo $form->textField($model,'id');} else {echo $model->id;} ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php if(!$this->fadmin){echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64));}
		else {echo $model->username;} ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		Jelszó változtatáskor töröld ki a régít és írd be az újat!
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php if(!$this->fadmin){echo $form->textField($model,'title',array('size'=>60,'maxlength'=>64));}
		else {echo $model->title;} ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
   <?php if(!$this->fadmin){ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'authority'); ?>
		<?php echo $form->textField($model,'authority'); ?>
		<?php echo $form->error($model,'authority'); ?>
	</div>
<?php } ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'lastmod'); ?>
		<?php echo $form->textField($model,'lastmod'); ?>
		<?php echo $form->error($model,'lastmod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rememberMe'); ?>
		<?php echo $form->textField($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Mentés'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->