<?php

class ContentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';
	public $admin;
	public $fadmin;
	public $temp;
	public $update="Oldal módosítása";
	public $list="Oldalak listázása";
	public $view="Oldal tartalom megnézése";
	public $delete="Oldal törlése";
	public $manage="Oldalak kezelése";
	public $create="Új oldal készítése";
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		$record=User::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if($record->authority<=99){$this->admin=true;}
		if($record->authority>=80 && $record->authority<99){$this->fadmin=true;}else{$this->temp="A feltétel nem teljesült";}
		if($record->authority>=80 AND $record->authority<=99){$enable_fadmin='@';} else {$enable_fadmin='XXX';}
		if($record->authority==99){$enable_admin='admin'; $this->admin=true;} else {$enable_admin='xx';}
		$temp=array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','update','create','admin','delete'),
				'users'=>array($enable_fadmin),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','view'),
				'users'=>array($enable_admin),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
		Content::model()->temp=$temp; //hibakereséshez
		return $temp;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$record=User::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if($record->authority>=80){
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));} else {throw new CHttpException(404,'Ez az oldal az Ön számára nem elérhető!');}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Content;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Content']))
		{
			$model->attributes=$_POST['Content'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Content']))
		{
			$model->attributes=$_POST['Content'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$contents = new CActiveDataProvider('Content');
		$this->render('index',array(
			'contents' => $contents,
		));
	}
	public function actionAthelyezendo()
	{
		$this->render('athelyezendo');
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Content('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Content']))
			$model->attributes=$_GET['Content'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Content the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Content::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Content $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='content-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
