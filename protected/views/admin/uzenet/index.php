<?php
/* @var $this UzenetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uzenets',
);
?>

<?php echo $this->renderPartial('../_title'); ?>
<div class="container">
		<table id="lista" >
		<tr>
			<th width="4%">ID</th>
			<th width="40%">Üzenet</th>
			<th width="29%">Megjegyzés</th>
			<th width="15%">Érvényesség</th>
			<th width="12%">Műveletek</th>
		</tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>