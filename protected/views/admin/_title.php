<?php if(!empty($this->module_info)){ ?>
<div class="container" >
	<div id="page_title">
		<h1>
			<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/admin/icon_large_module.png" />
			<a href="<?php echo $this->createAbsoluteUrl($this->uniqueid); ?>"><?php echo $this->module_info['title']; ?></a> 
			<?php if(!empty($this->module_info['item'])){ ?>/ <?php echo $this->module_info['item']; ?> <?php } ?>
		</h1>
	</div>
	<div id="title_right">
		<?php if(!empty($this->module_info['new'])){ ?>
			<a href="<?php echo $this->createAbsoluteUrl($this->uniqueid); ?>/create">
				Új <?php echo $this->module_info['new']; ?> hozzáadása <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/images/admin/icon_large_add.png" />
			</a>
		<?php } ?>
	</div>
</div>
<?php } ?>