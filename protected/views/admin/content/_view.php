<?php
/* @var $this ContentController */
/* @var $data Content */
?>
		<tr>
			<td><?php echo $data->id;//CHtml::encode($data->getAttributeLabel('id')); ?></td>
			<td><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></td>
			<td><?php echo CHtml::encode($data->descrption); ?></td>
			<td class="ex"><input name="contact_finish" id="contact_finish_<?php echo CHtml::encode($data->name); ?>" <?php if($data->contact_finish == 1){ ?>checked="checked"<?php } ?> type="radio" value="<?php echo CHtml::encode($data->id); ?>" /></td>
			<td class="button-column"><a class="view" title="View" href="/dds-yii/admin/content/view/id/<?php echo $data->id?>"><img src="/dds-yii/assets/5c465458/gridview/view.png" alt="View" /></a> <a class="update" title="Update" href="/dds-yii/admin/content/update/id/<?php echo $data->id?>"><img src="/dds-yii/assets/5c465458/gridview/update.png" alt="Update" /></a> <a class="delete" title="Delete" href="/dds-yii/admin/content/delete/id/<?php echo $data->id?>"><img src="/dds-yii/assets/5c465458/gridview/delete.png" alt="Delete" /></a></td>
		</tr>