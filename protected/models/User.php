<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $salt
 * @property integer $srtategy
 * @property integer $authority
 * @property string $remembering
 * @property string $lastmod
 * @property string $title
 * @property integer $rememberMe
 */
class User extends CActiveRecord
{
	public $temp; 
	public $admin;
	public $fadmin;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, username, password, salt,  authority', 'required'),
			array('id, salt, srtategy, authority, rememberMe', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>64),
			array('password, remembering', 'length', 'max'=>255),
			array('title', 'length', 'max'=>60),
	//		array('lastmod', 'lenght', 'max' => 20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, salt, srtategy, authority, remembering, lastmod, title, rememberMe', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
			'srtategy' => 'Srtategy',
			'authority' => 'Authority',
			'remembering' => 'Remembering',
			'lastmod' => 'Lastmod',
			'title' => 'Title',
			'rememberMe' => 'Remember Me',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt);
		$criteria->compare('srtategy',$this->srtategy);
		$criteria->compare('authority',$this->authority);
		$criteria->compare('remembering',$this->remembering,true);
		$criteria->compare('lastmod',$this->lastmod,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('rememberMe',$this->rememberMe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}