<?php
/* @var $this ContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contents',
);

?>

<?php echo $this->renderPartial('../_title'); ?>
<div class="container">
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