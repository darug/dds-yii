<?php
/* @var $this KorzetController */
/* @var $model Korzet */

$this->breadcrumbs=array(
	'Korzets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Korzet', 'url'=>array('index')),
	array('label'=>'Create Korzet', 'url'=>array('create')),
	array('label'=>'Update Korzet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Korzet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Korzet', 'url'=>array('admin')),
);
?>

<h1>View Korzet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'title',
		'irszam',
		'megjegyzes',
		'kezdo_szam_paros',
		'veg_szam_paros',
		'kezdo_szam_paratlan',
		'veg_szam_paratlan',
		'utca',
	),
)); ?>
