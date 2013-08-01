<?php
/* @var $this KorzetController */
/* @var $model Korzet */

$this->breadcrumbs=array(
	'Korzets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Korzet', 'url'=>array('index')),
	array('label'=>'Manage Korzet', 'url'=>array('admin')),
);
?>

<h1>Create Korzet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>