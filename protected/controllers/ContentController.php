<?php

class ContentController extends Controller
{
	public function actionIndex()
	{
		$name = Yii::app()->getRequest()->getQuery('name');
		$this->getContent($name);		
	}
	
	public function actionHome(){
		
		$this->getContent('home');
		
	}
	
	public function getContent($name){
		
		$content = Content::model()->find(array(
		    'condition'=>'name=:name',
		    'params'=>array(':name'=>$name)
		));
		if($content === NULL) throw new CHttpException(404, "A keresett tartalom nem található");
		
		$this->render('index', array('content' => $content));
		
	}

}