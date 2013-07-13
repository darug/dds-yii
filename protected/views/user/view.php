<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->create, 'url'=>array('create')),
	array('label'=>$this->update, 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>$this->delete, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
?>

<h1><?php echo $this->view." #".$model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'salt',
		'srtategy',
		'authority',
		'remembering',
		'lastmod',
		'title',
		'rememberMe',
	),
)); ?>
