<?php
/* @var $this UzenetController */
/* @var $data Uzenet */
?>
		<tr>
			<td><?php echo $data->id; ?></td>
			<td><?php echo CHtml::link(CHtml::encode($data->uzenet), array('update', 'id'=>$data->id)); ?></td>
			<td><?php echo CHtml::encode($data->megjegyzes); ?></td>
			<td><?php echo CHtml::encode($data->ervenyes); ?></td>
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