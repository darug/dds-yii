<?php
/* @var $this ContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contents',
);

$this->menu=array(
	array('label'=>$this->create, 'url'=>array('create')),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
?>

<h1><?php echo $this->list ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
