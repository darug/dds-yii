<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $descrption
 * @property string $content
 * @property integer $noindex
 * @property integer $is_active
 * @property integer $contact_finish
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
			array('name, title, descrption', 'required'),
			array('noindex, is_active, contact_finish', 'numerical', 'integerOnly'=>true),
			array('name, title, descrption', 'length', 'max'=>255),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, noindex, is_active, contact_finish', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
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

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('noindex',$this->noindex);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('contact_finish',$this->contact_finish);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}