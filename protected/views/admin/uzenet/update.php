<?php
/* @var $this UzenetController */
/* @var $model Uzenet */

$this->breadcrumbs=array(
	'Uzenets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<?php echo $this->renderPartial('../_title'); ?>
<div class="container center">
	<div id="edit" style="width: 980px;">
		<h1> <?php echo $this->update." #".$model->id; ?></h1>
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>