<?php
/* @var $this KorzetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Körzet határ',
);

$this->menu=array(
	array('label'=>$this->create, 'url'=>array('create')),
	); 
?>

<h1>Körzet listázás, kezelés</h1>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'korzet-grid',
	'dataProvider'=>$dataProvider,
	
	'columns'=>array(
		'id',
		'name',
		'title',
		'irszam',
		'utca',
		'megjegyzes',
		'kezdo_szam_paros',
		'veg_szam_paros',
		'kezdo_szam_paratlan',
		'veg_szam_paratlan',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
 ?>
