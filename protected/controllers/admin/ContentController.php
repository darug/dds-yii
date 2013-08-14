<?php

class ContentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';
	/*public $admin;
	public $fadmin;
	public $temp;*/
	
	public $module_info = array(
		'name'				=>	'content',
		'title'				=>	'Tartalmak',
		'new'				=>	'tartalom'
	);
	/*public $update="Oldal módosítása";
	public $list="Oldalak listázása";
	public $view="Oldal tartalom megnézése";
	public $delete="Oldal törlése";
	public $manage="Oldalak kezelése";
	public $create="Új oldal készítése";*/
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
		/*$record=User::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if($record->authority<=99){$this->admin=true;}
		if($record->authority>=80 && $record->authority<99){$this->fadmin=true;}else{$this->temp="A feltétel nem teljesült";}
		if($record->authority>=80 AND $record->authority<=99){$enable_fadmin='@';} else {$enable_fadmin='XXX';}
		if($record->authority==99){$enable_admin='admin'; $this->admin=true;} else {$enable_admin='xx';}*/
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','update','create','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);

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
				$this->redirect($this->createAbsoluteUrl($this->uniqueid));
		}
		
		$this->module_info['item'] = "Új " . $this->module_info['new'] . " hozzáadása";
		
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
				$this->redirect(array('index'));
		}
		
		$this->module_info['item'] = $model->title . " szerkesztése";
	
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
			//$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			$this->redirect($this->createAbsoluteUrl($this->uniqueid));
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
