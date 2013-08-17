<?php
/* @var $this FelvilagositController */
/* @var $model Felvilagosit */

$this->breadcrumbs=array(
	'Felvilagosits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Felvilagosit', 'url'=>array('index')),
	array('label'=>'Manage Felvilagosit', 'url'=>array('admin')),
);
?>

<h1>Create Felvilagosit</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>