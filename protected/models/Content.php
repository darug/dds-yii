<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property integer $id
 * @property string $url
 * @property string $name
 * @property string $title
 * @property string $descrption
 * @property string $content
 * @property integer $noindex
 * @property integer $is_active
 * @property integer $contact_finish
 * @property string $temp // atmeneti tarolo
 * @property boolen $admin //false, ha nem a user->autority <80
 */
class Content extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Content the static model class
	 */
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'content';
	}
 	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('title', 'unique', 'on' => array('insert', 'update')),
			array('name', 'createUrl', 'on' => array('insert', 'update')),
		//	array('content','ckeditor'),
			array('noindex, is_active, contact_finish', 'boolean'),
			array('title, descrption', 'length', 'max'=>255),
			array('content', 'safe'),
		);
	}
	
	public function createUrl(){
		
		$string_output = '';
		
		$source = array( "í", "é", "á", "ű", "ő", "ú", "ö", "ü", "ó", "Í", "É", "Á", "Ű", "Ő", "Ú", "Ö", "Ü", "Ó", " ", "-", "/", "<", ">", "#", "&", "@", "{", "}", "[", "]", "$", "\"", "'", "\\", ";", "*", "+" );
   		$output =  array( "i", "e", "a", "u", "o", "u", "o", "u", "o", "I", "E", "A", "U", "O", "U", "O", "U", "O", "_", "_", "", "",  "",  "",  "",  "",  "",  "",  "",  "",  "",  "",   "",   "",   "",  "",  "" );
        
        $name = str_replace($source, $output, $this->title);
        $name = strtolower($name);
        
        $pattern="/([a-z0-9]|_)*/";
        preg_match_all($pattern, $name, $outputarray, PREG_SET_ORDER);
        foreach ($outputarray as $item){
          $string_output .= $item[0];
        }
        $string_output=preg_replace("/_{2,}/","_",$string_output);            
        $string_output=preg_replace("/^_/","",$string_output);
        $string_output=preg_replace("/_$/","",$string_output);
		
		$this->name = $string_output;
		
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Név (url)',
			'title' => 'Cím',
			'descrption' => 'Leírás (SEO)',
			'content' => 'Tartalom',
			'noindex' => 'Keresőrobotok tiltása',
			'is_active' => 'Aktív',
			'contact_finish' => 'Kapcsolat céloldal',
		);
	}

}