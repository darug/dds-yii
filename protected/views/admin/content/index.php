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
<div class="container">
		<h1><?php echo $this->list ?></h1>
		<form action="{$smarty.server.PHP_SELF}?mod=statikus&amp;task=set_radio" method="post" />
		<table id="lista" >
		<tr>
			<th width="4%">ID</th>
			<th width="29%">Oldalcím</th>
			<th width="40%">Leírás</th>
			<th width="10%">Kapcsolat köszönő oldal</th>
			<th width="17%">Műveletek</th>
		</tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$contents,
	'itemView'=>'_view',
)); ?>
</table>