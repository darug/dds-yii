<?php

class AuthenticationController extends Controller
{
	
	public $layout='//layouts/admin-login';
	
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				
				Yii::app()->user->setFlash('success', 'Sikeres bejelentkezés.');
				
				$this->redirect(Yii::app()->getBaseUrl(true) . '/admin');
			
			}
			else{
				
				Yii::app()->user->setFlash('error', 'Hibás felhasználói név vagy jelszó.');
				
			}
		}
		
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	public function actionLogout()
	{
		
		Yii::app()->user->logout();
		Yii::app()->session->open();
		Yii::app()->user->setFlash('success', 'Sikeres kijelentkezés.');
		$this->redirect(Yii::app()->getBaseUrl(true) . '/admin/login');
	}

}