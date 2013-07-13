<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->create, 'url'=>array('create')),
	array('label'=>$this->view, 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>$this->manage, 'url'=>array('admin')),
);
if(!$this->admin){
	unset($this->menu[0]);
	unset($this->menu[1]);
	unset($this->menu[3]);
}
?>

<h1> <?php echo $this->update." #".$model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>