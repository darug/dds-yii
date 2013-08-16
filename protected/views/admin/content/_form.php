<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">A <span class="required">*</span>-gal jelölt mezök kitöltése kötelező!</p>

	<?php echo $form->hiddenField($model,'id'); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?><br />
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?><br />
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrption'); ?><br />
		<?php echo $form->textField($model,'descrption',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descrption'); ?>
	</div>

	<div class="row" id="Content_content contenteditable="true"">
		<?php echo $form->labelEx($model,'content'); ?><br /><br />
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
		 <script>
                CKEDITOR.replace( 'Content[content]' );
        </script>
	<div class="row">
		<?php echo $form->checkBox($model,'noindex'); ?>
		<?php echo $form->labelEx($model,'noindex'); ?>		
		<?php echo $form->error($model,'noindex'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model,'is_active'); ?>
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model,'contact_finish',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->labelEx($model,'contact_finish'); ?>
		<?php echo $form->error($model,'contact_finish'); ?>
	</div>

	<div class="row buttons">
		<?php echo $this->renderPartial('../_submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->