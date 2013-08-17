<?php
/* @var $this FelvilagositController */
/* @var $data Felvilagosit */
$bUrl=Yii::app()->request->baseUrl;
?>

<div class="view">

	<fieldset>
	<legend align="center"	><?php echo CHtml::encode($data->title); ?></legend>
	
	<br />

	<a href="<?php if(strpos($data->link,'://')){ echo $data->link;} else {echo $bUrl.$data->link;} ?>">
	<?php echo $data->rovid; ?>
	</a>
	<br />

	<a class="more" href="#">Bővebben</a>
	<div class="long_text"><?php echo $data->hosszu; ?></div>
		
</fieldset>

</div>