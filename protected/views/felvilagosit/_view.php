<?php
/* @var $this FelvilagositController */
/* @var $data Felvilagosit */
$bUrl=Yii::app()->request->baseUrl;
?>

<div class="view">

	<fieldset>
	<legend align="center"	><?php echo CHtml::encode($data->title); ?></legend>
	
<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b> -->
	
	<br />

	<a href="<?php if(strpos($data->link,'://')){ echo $data->link;} else {echo $bUrl.$data->link;} ?>">
	<?php echo $data->rovid; ?>
	</a>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('hosszu')); ?>Bővebben: <br></b>
	<?php echo $data->hosszu; ?>
	<br />

	
</fieldset>

</div>