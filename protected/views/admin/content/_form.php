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
<script>
    // Turn off automatic editor creation first.
  //  var a= new CKEDITOR;
 //   CKEDITOR.disableAutoInline = true;
 //   CKEDITOR.inline( 'Content_content' );
</script>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php if($this->admin OR $this->breadcrumbs[2]=='View'){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<?php } ?>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrption'); ?>
		<?php echo $form->textField($model,'descrption',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descrption'); ?>
	</div>

	<div class="row" id="Content_content contenteditable="true"">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
		 <script>
                CKEDITOR.replace( 'Content[content]' );
        </script>
    <!--   $smarty(CKEDITOR.replace( 'Content[content]' )); -->
	</div>
<?php if($this->admin OR $this->breadcrumbs[2]=='View'){ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'noindex'); ?>
		<?php echo $form->textField($model,'noindex'); ?>
		<?php echo $form->error($model,'noindex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_finish'); ?>
		<?php echo $form->textField($model,'contact_finish'); ?>
		<?php echo $form->error($model,'contact_finish'); ?>
	</div>
<?php } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->