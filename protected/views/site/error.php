<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Hiba az oldalon - <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
<br>
<pre>
<?php echo print_r(Content::model()->temp)."<br>"; ?>
</pre>
</div>