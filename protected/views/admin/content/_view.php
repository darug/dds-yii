<?php
/* @var $this ContentController */
/* @var $data Content */
?>
		<tr>
			<td><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></td>
			<td><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></td>
			<td><?php echo CHtml::encode($data->descrption); ?></td>
			<td class="ex"><input name="contact_finish" id="contact_finish_<?php echo CHtml::encode($data->name); ?>" <?php if($data->contact_finish == 1){ ?>checked="checked"<?php } ?> type="radio" value="<?php echo CHtml::encode($data->id); ?>" /></td>
			<td></td>
		</tr>