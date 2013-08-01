<?php
/* @var $this KorzetController */
/* @var $model Korzet */

$this->breadcrumbs=array(
	'Korzets'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Korzet', 'url'=>array('index')),
	array('label'=>'Create Korzet', 'url'=>array('create')),
	array('label'=>'View Korzet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Korzet', 'url'=>array('admin')),
);
?>

<h1>Update Korzet <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>