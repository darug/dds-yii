<?php
/* @var $this ContentController */
/* @var $data Content */
?>
		<tr>
			<td><?php echo $data->id; ?></td>
			<td><?php echo CHtml::link(CHtml::encode($data->title), array('update', 'id'=>$data->id)); ?></td>
			<td><?php echo CHtml::encode($data->descrption); ?></td>
			<td class="ex"><input name="contact_finish" id="contact_finish_<?php echo CHtml::encode($data->name); ?>" <?php if($data->contact_finish == 1){ ?>checked="checked"<?php } ?> type="radio" value="<?php echo CHtml::encode($data->id); ?>" /></td>
			<td class="button-column">
				<a title="Szerkesztés" href="<?php echo $this->createAbsoluteUrl($this->uniqueid); ?>/update/id/<?php echo $data->id?>">
					<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/admin/icon_edit.png" alt="Szerkesztés" />
				</a>
				
				<form action="<?php echo $this->createAbsoluteUrl($this->uniqueid); ?>/delete/id/<?php echo $data->id?>" method="post">
					<button onclick="return confirm('A(z) <?php echo $this->module_info['new']; ?> véglegesen törlésre fog kerülni. Biztosan folytatja?')"type="submit">
						<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/admin/icon_del.png" alt="Törlés" />
					</button>
				</form>
			</td>
		</tr>