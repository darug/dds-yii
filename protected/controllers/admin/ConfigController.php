<?php

class ConfigController extends Controller
{
	
	public $layout='//layouts/admin';
	
	public $module_info = array(
		'name'				=>	'config',
		'title'				=>	'Beállítások'
	);
	
	public function actionIndex()
	{
		
		$config = Config::model()->getAllConfig();
		
		if(isset($_POST['Config'])) $this->actionSave($config);
		
		$this->render('index', array('config' => $config));
	}

	public function actionSave($config)
	{
	
		$valid = true;
		foreach($config as $i => $item){
				
			if(isset($_POST['Config'][$i])) $item->attributes = $_POST['Config'][$i];
			$item_valid = $item->validate();	
			if($item_valid) $item->save();	
			$valid = $item_valid && $valid;
				
		}
			
		if(!$valid){
				
			//hibakezelés
				
		}

		$this->redirect('config/index');
		
	}

}