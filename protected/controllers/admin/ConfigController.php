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
		$this->render('index');
	}

	public function actionSave()
	{
		$this->redirect('index');
	}

}