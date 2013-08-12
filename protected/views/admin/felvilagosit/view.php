<?php
/* @var $this FelvilagositController */
/* @var $model Felvilagosit */

$this->breadcrumbs=array(
	'Felvilagosits'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Felvilagosit', 'url'=>array('index')),
	array('label'=>'Create Felvilagosit', 'url'=>array('create')),
	array('label'=>'Update Felvilagosit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Felvilagosit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Felvilagosit', 'url'=>array('admin')),
);
?>

<h1>View Felvilagosit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'title',
		'link',
		'rovid',
		'hosszu',
		'megjegyzes',
	),
)); ?>
