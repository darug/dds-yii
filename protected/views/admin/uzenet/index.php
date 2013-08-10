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

<h1>Üzenetek</h1>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'uzenet-grid',
	'dataProvider'=>$dataProvider,
	
	'columns'=>array(
		'id',
		'uzenet:html',
		'ervenyes',
		'megjegyzes:html',
		'valid',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/
 ?>