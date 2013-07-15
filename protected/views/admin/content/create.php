<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
?>

<h1><?php echo $this->create; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>