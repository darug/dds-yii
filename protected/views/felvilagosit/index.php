<?php
/* @var $this FelvilagositController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Felvilagositas',
);

?>

<h1>Felvilágositás és egyéb hasznos információk</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'htmlOptions'=> array('baseScriptUrl'=>'',	)
)); ?>
