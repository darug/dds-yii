<?php
/* @var $this UzenetController */
/* @var $model Uzenet */

$this->breadcrumbs=array(
	'Uzenets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uzenet', 'url'=>array('index')),
	array('label'=>'Manage Uzenet', 'url'=>array('admin')),
);
?>

<h1>Create Uzenet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>