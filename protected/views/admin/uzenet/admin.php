<?php
/* @var $this UzenetController */
/* @var $model Uzenet */

$this->breadcrumbs=array(
	'Uzenets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>$this->list, 'url'=>array('index')),
	array('label'=>$this->create, 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#uzenet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo $this->manage ?></h1>

<p>
A következő összehasonlító jeleket használhatsz a kereső szó elött (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
vagy <b>=</b>). Ha törtszóra szeretnél keresni, akkor ne használj kiegészítő jeleket!<br>
Ezzal az oldallal kezelheted a statikus oldal tartalmakat.

</p>

<?php echo CHtml::link('Bővített keresés','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'uzenet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'uzenet',
		'ervenyes',
		'megjegyzes',
		'valid',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
