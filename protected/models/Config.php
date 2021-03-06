<?php

/**
 * This is the model class for table "config".
 *
 * The followings are the available columns in table 'config':
 * @property integer $id
 * @property string $item
 * @property string $value
 * @property string $type
 */
class Config extends CActiveRecord
{
	
	protected $attributeLabels = array();
	
	protected function afterFind ()
    {

        $this->attributeLabels = array(
			'value'			=>	$this->label,
		);

        parent::afterFind();
    }
	
	public static function getAllConfig(){
		
		return self::model()->findAll(array('index' => 'id', 'order' => 'category, id'));
		
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Config the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return $this->attributeLabels;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'config';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item, value, type', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item, value, type', 'safe', 'on'=>'search'),
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
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}