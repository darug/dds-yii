<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->create, 'url'=>array('create')),
	array('label'=>$this->view, 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
?>

<h1><?php echo $this->update." #".$model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>