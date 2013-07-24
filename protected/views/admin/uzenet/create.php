<?php
/* @var $this UzenetController */
/* @var $model Uzenet */

$this->breadcrumbs=array(
	'Uzenets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
?>

<h1><?php echo $this->create ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>