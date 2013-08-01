<?php

class KorzetController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Korzet;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Korzet']))
		{
			$model->attributes=$_POST['Korzet'];
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

		if(isset($_POST['Korzet']))
		{
			$model->attributes=$_POST['Korzet'];
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
		//$dataProvider=new CActiveDataProvider('Korzet');
		$model=new Korzet('search');
		$model->unsetAttributes();  // clear any default values
		unset($uzenet);
		/** Ha csak egy rekord van és páros és páratlan kezdőszám üres, akkor $uzenet="ez a az utca teljes egészében a körzetemhez tartozik!",
		 * Ha csak egyik oldalon van számozás, akkor $uzenet="Ez az utca n.-tól m.-ig tartozik a körztemhez"
		 * Ha mindkét oldalon van szám, akkor $uzenet="Ez az utca n.-től m.-ig és x.-től y.ig tartozik a körzetemhez!"
		 * Ha több rekord került kijelzésre, akkor $uzenet="Kérem szükítse le egy utcára a keresést!"
		 * Ha a rekord szám nulla, akkor "Ez az utca nem tartozik a körzetemhez!"
		 * Jelenleg a lenti feltételek nem működnek, hogy miért az még nyomozásra vár
		 **/
		if(isset($_GET['Korzet'])){
			$model->attributes=$_GET['Korzet'];
		if(count($model->utca)==1){$uzenet="Ez az utca ";}
		elseif($model->kezdo_szam_paros=="" && $model->kezdo_szam_paratlan==""){$uzenet.="teljes egészében a körzetemhez tartozik!";}
		}
		elseif($model->kezdo_szam_paros>=2 or $model->kezdo_szam_paratlan>=1){$uzenet.=$model->kezdo_szam_paros."-tól....";} //szamhatarokat beszurni
		else{$uzenet="Ez az utca NEM TARTOZIK a körzetemhez!";}
		$this->render('index',array(
			'model'=>$model,
			'uzenet'=>$uzenet,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Korzet('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Korzet']))
			$model->attributes=$_GET['Korzet'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Korzet the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Korzet::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Korzet $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='korzet-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
