<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authority')); ?>:</b>
	<?php echo CHtml::encode($data->authority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rememberMe')); ?>:</b>
	<?php echo CHtml::encode($data->rememberMe); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastmod')); ?>:</b>
	<?php echo CHtml::encode($data->lastmod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rememberMe')); ?>:</b>
	<?php echo CHtml::encode($data->rememberMe); ?>
	<br />

	*/ ?>

</div>