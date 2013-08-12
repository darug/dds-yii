<?php
/* @var $this FelvilagositController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Felvilagosits',
);

$this->menu=array(
	array('label'=>'Create Felvilagosit', 'url'=>array('create')),
	array('label'=>'Manage Felvilagosit', 'url'=>array('admin')),
);
?>

<h1>Felvilagosits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
