<?php
/* @var $this KorzetController */
/* @var $data Korzet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('irszam')); ?>:</b>
	<?php echo CHtml::encode($data->irszam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utca')); ?>:</b>
	<?php echo CHtml::encode($data->utca); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('megjegyzes')); ?>:</b>
	<?php echo CHtml::encode($data->megjegyzes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kezdo_szam_paros')); ?>:</b>
	<?php echo CHtml::encode($data->kezdo_szam_paros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('veg_szam_paros')); ?>:</b>
	<?php echo CHtml::encode($data->veg_szam_paros); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('kezdo_szam_paratlan')); ?>:</b>
	<?php echo CHtml::encode($data->kezdo_szam_paratlan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('veg_szam_paratlan')); ?>:</b>
	<?php echo CHtml::encode($data->veg_szam_paratlan); ?>
	<br />

	


</div>