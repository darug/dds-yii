<?php
/* @var $this KorzetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Korzets',
);
/*
$this->menu=array(
	array('label'=>'Create Korzet', 'url'=>array('create')),
	array('label'=>'Manage Korzet', 'url'=>array('admin')),
); */
?>

<h1>Körzet ellenőrzés</h1>
<p> Kérjük kezdje el bevinni a címét az utca alatti keretbe, ha az első betük bevitele után látszódik keresett név, akkor kattintson rá és nyomjon entert.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'korzet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'utca',
	),
));
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/
if(isset($uzenet)){ echo "<p>$uzenet<p>"; } ?>
