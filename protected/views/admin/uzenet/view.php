<?php
/* @var $this UzenetController */
/* @var $model Uzenet */

$this->breadcrumbs=array(
	'Uzenets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->create, 'Content', 'url'=>array('create')),
	array('label'=>$this->update, 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>$this->delete, 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
if(!$this->admin){
	unset($this->menu[0]);
	unset($this->menu[1]);
	unset($this->menu[3]);
}
?>

<h1><?php echo $this->view." #".$model->id; ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'uzenet-grid',
	'dataProvider'=>$model->search(),
	
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
/*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uzenet',
		'ervenyes',
		'megjegyzes',
		'valid',
	),
));
 */
  ?>
