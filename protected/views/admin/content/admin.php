<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents'=>array('index'),
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
	$('#content-grid').yiiGridView('update', {
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
<!--<pre>
<?php echo print_r(Content::model()->temp)."<br>"; ?>
</pre>-->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'content-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'title',
		'descrption',
		'content',
		'noindex',
		'is_active',
		'contact_finish',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
