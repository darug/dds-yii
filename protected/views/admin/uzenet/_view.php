<?php
/* @var $this UzenetController */
/* @var $data Uzenet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uzenet')); ?>:</b>
	<?php echo CHtml::encode($data->uzenet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ervenyes')); ?>:</b>
	<?php echo CHtml::encode($data->ervenyes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('megjegyzes')); ?>:</b>
	<?php echo CHtml::encode($data->megjegyzes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid')); ?>:</b>
	<?php echo CHtml::encode($data->valid); ?>
	<br />


</div>