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
		
		$config = Config::model()->findAll(array('order' => 'category, id'));
		
		$this->render('index', array('config' => $config));
	}

	public function actionSave()
	{
		$this->redirect('index');
	}

}