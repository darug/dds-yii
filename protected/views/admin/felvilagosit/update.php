<?php
/* @var $this FelvilagositController */
/* @var $model Felvilagosit */

$this->breadcrumbs=array(
	'Felvilagosits'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Felvilagosit', 'url'=>array('index')),
	array('label'=>'Create Felvilagosit', 'url'=>array('create')),
	array('label'=>'View Felvilagosit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Felvilagosit', 'url'=>array('admin')),
);
?>

<h1>Update Felvilagosit <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>