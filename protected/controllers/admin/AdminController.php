<?php

class AdminController extends Controller
{
	
	 public $layout='//layouts/admin';
	 /**
	 * Declares class-based actions.
	 */

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	 public function actionAthelyezendo()
	{
		$this->render('athelyezendo');
	}
	
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$this->render('index');
			//$record=Content::model()->findByAttributes(array('contact_finish'=>'index'));//a home helyére a megfelelő name írandó
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		/*$url = Yii::app()->getRequest()->getQuery('url');
		
		$content = Content::model()->find(array(
		    'condition'=>'url=:url',
		    'params'=>array(':url'=>$url)
		));
		if($content === NULL){
			$content = Content::model()->find(array(
		    'condition'=>'url=:url',
		    'params'=>array(':url'=>'home')
		));} 
		if($content === NULL) throw new CHttpException(404, "A keresett tartalom nem található");
		$this->render('index', array('record' => $content));*/
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			$error=$error."--SiteController";
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	
}