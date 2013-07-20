<?php
/* @var $this UzenetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uzenets',
);

$this->menu=array(
	array('label'=>$this->create, 'url'=>array('create')),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
?>

<h1>Uzenetek</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
