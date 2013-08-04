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
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(''),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(''),
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
	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//$dataProvider=new CActiveDataProvider('Korzet');
		$model=new Korzet();
		$model->unsetAttributes();  // clear any default values
		unset($uzenet);
		/** Ha csak egy rekord van és páros és páratlan kezdőszám üres, akkor $uzenet="ez a az utca teljes egészében a körzetemhez tartozik!",
		 * Ha csak egyik oldalon van számozás, akkor $uzenet="Ez az utca n.-tól m.-ig tartozik a körztemhez"
		 * Ha mindkét oldalon van szám, akkor $uzenet="Ez az utca n.-től m.-ig és x.-től y.ig tartozik a körzetemhez!"
		 * Ha több rekord került kijelzésre, akkor $uzenet="Kérem szükítse le egy utcára a keresést!"
		 * Ha a rekord szám nulla, akkor "Ez az utca nem tartozik a körzetemhez!"
		 * Jelenleg a lenti feltételek nem működnek, hogy miért az még nyomozásra vár
		 **/
	if(isset($_POST['Korzet'])){
		
			$model->attributes=$_POST['Korzet'];
		//	$record=$model->search();
		//	$record=$model->find('utca=:utca', array(':utca'=>$_POST['Korzet']['utca']));		
		if($record=$model->find('utca=:utca', array(':utca'=>$_POST['Korzet']['utca']))){
			$uzenet="kezdes";
			$color="green";
			if($record->kezdo_szam_paros>0 && $record->kezdo_szam_paratlan>0){
				$uzenet="Ez az utca a ".$record->kezdo_szam_paratlan.".-tól ".$record->veg_szam_paratlan.".-ig és a "
				.$record->kezdo_szam_paros.".-tól ".$record->veg_szam_paros.".-ig a körzetemhez tartozik!";
				}
			if($record->kezdo_szam_paros=="" && $record->kezdo_szam_paratlan>="1"){
				$uzenet="Ez az utca a ".$record->kezdo_szam_paratlan."-tól ".$record->veg_szam_paratlan."-ig a körzetemhez tartozik!";}
			if($record->kezdo_szam_paros>="2" && $record->kezdo_szam_paratlan==""){
				$uzenet="Ez az utca a ".$record->kezdo_szam_paros."-tól ".$record->veg_szam_paros."-ig a körzetemhez tartozik!";}
			if($record->kezdo_szam_paros=="" && $record->kezdo_szam_paratlan==""){$uzenet="Ez az utca teljes egészében a körzetemhez tartozik!";}
			
			
			
		}
		else{$uzenet="Ez az utca NEM TARTOZIK a körzetemhez!";$color="red";} 
	 }	
		$this->render('index',array(
			'model'=>$model,
			'uzenet'=>$uzenet,
			'record'=>$record,
			'color' =>$color,
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
			throw new CHttpException(404,'A keresett tartalom nem található.');
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
