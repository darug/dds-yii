<?php

/**
 * This is the model class for table "uzenet".
 *
 * The followings are the available columns in table 'uzenet':
 * @property integer $id
 * @property string $uzenet
 * @property string $ervenyes
 * @property string $megjegyzes
 * @property integer $valid
 */
class Uzenet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Uzenet the static model class
	 */
	public $temp; 
	public $admin;
	public $fadmin;
	
	private $datum;
	
	public function __construct(){
	
		$this->initDatum();
	}
	public function initDatum(){
		$this->datum = date('Y-m-d');
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uzenet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uzenet', 'required'),
			array('valid', 'numerical', 'integerOnly'=>true),
			array('uzenet, megjegyzes', 'length', 'max'=>255),
			array('ervenyes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uzenet, ervenyes, megjegyzes, valid', 'safe', 'on'=>'search'),
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
			'uzenet' => 'Üzenet tartalma',
			'ervenyes' => 'Megjelenítési határidő',
			'megjegyzes' => 'Megjegyzés',
			'valid' => 'Érvényes (0), érvénytelen(1)',
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
		$criteria->compare('uzenet',$this->uzenet,true);
		$criteria->compare('ervenyes',$this->ervenyes,true);
		$criteria->compare('megjegyzes',$this->megjegyzes,true);
		$criteria->compare('valid',$this->valid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function info()
 	{
		$record = $this->find(array(
		    'condition'=>'ervenyes>:ervenyes',
		    'params'=>array(':ervenyes'=>$this->datum)));
		$info=$record->uzenet;
		return $info;
	} 
}