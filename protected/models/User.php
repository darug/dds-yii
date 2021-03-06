<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $authority
 * @property string $lastmod
 * @property integer $rememberMe
 */
class User extends CActiveRecord
{
	public $temp; 
	public $admin;
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
			array('id, username,title, password, authority', 'required'),
			array('id, authority, rememberMe', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>64),
			array('password,title', 'length', 'max'=>255),
	//		array('lastmod', 'lenght', 'max' => 20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, title, authority, lastmod, rememberMe', 'safe', 'on'=>'search'),
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
			'username' => 'Fehasználói név',
			'password' => 'Password',
			'title' => 'Leírás',
			'authority' => 'Jogosultság (guest<80, oldal tulajdonos<91,',
			'lastmod' => 'Utolsó mődosítás ideje',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('authority',$this->authority);
		$criteria->compare('lastmod',$this->lastmod,true);
		$criteria->compare('rememberMe',$this->rememberMe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}