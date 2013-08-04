<?php
/* @var $this KorzetController */
/* @var $model Korzet */

$this->breadcrumbs=array(
	'Korzets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
);
?>

<h1>Új körzetrész felvitele</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>