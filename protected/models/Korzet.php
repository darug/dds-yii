<?php

/**
 * This is the model class for table "korzet".
 * @brief  Utca nevjegyzek alapjan kiirja, hogy a beirt utca az orvose-e?
 *  @author oDG
 *  @date 2013.08.04.
 * 
 * The followings are the available columns in table 'korzet':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property integer $irszam
 * @property string $megjegyzes
 * @property string $kezdo_szam_paros
 * @property string $veg_szam_paros
 * @property string $kezdo_szam_paratlan
 * @property string $veg_szam_paratlan
 * @property string $utca
 */
class Korzet extends CActiveRecord
{
	public $temp; 
	public $admin;
	public $fadmin;
	
	 
	 /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Korzet the static model class
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
		return 'korzet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, title, utca', 'required'),
			array('irszam', 'numerical', 'integerOnly'=>true),
			array('name, title, megjegyzes, kezdo_szam_paros, veg_szam_paros, kezdo_szam_paratlan, veg_szam_paratlan, utca', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, title, irszam, megjegyzes, kezdo_szam_paros, veg_szam_paros, kezdo_szam_paratlan, veg_szam_paratlan, utca', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'title' => 'Title',
			'irszam' => 'Irányítószám',
			'utca' => 'Utca',
			'megjegyzes' => 'Megjegyzes',
			'kezdo_szam_paros' => 'Kezdő Szám Páros',
			'veg_szam_paros' => 'Vég Szám Páros',
			'kezdo_szam_paratlan' => 'Kezdő Szám Páratlan',
			'veg_szam_paratlan' => 'Vég Szám Páratlan',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('irszam',$this->irszam);
		$criteria->compare('utca',$this->utca,true);
		$criteria->compare('megjegyzes',$this->megjegyzes,true);
		$criteria->compare('kezdo_szam_paros',$this->kezdo_szam_paros,true);
		$criteria->compare('veg_szam_paros',$this->veg_szam_paros,true);
		$criteria->compare('kezdo_szam_paratlan',$this->kezdo_szam_paratlan,true);
		$criteria->compare('veg_szam_paratlan',$this->veg_szam_paratlan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}