<?php
/* @var $this FelvilagositController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Felvilagositas',
);
?>
<script>
	$(document).ready(function(){
		$('.long_text').hide();
		$('a.more').click(function(e){
			$('.long_text').slideUp();
			var long = $(this).next('.long_text');
			if(!long.is(':animated')) long.slideDown();
			e.preventDefault();
		});
	});
</script>
<h1>Felvilágositás és egyéb hasznos információk</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'htmlOptions'=> array('baseScriptUrl'=>'',	)
)); ?>
