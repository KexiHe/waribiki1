<?php

/**
 * This is the model class for table "wb_post".
 *
 * The followings are the available columns in table 'wb_post':
 * @property string $jiscode
 * @property string $oldcode
 * @property string $newcode
 * @property string $pref_kana
 * @property string $city_kana
 * @property string $street_kana
 * @property string $pref_kanji
 * @property string $city_kanji
 * @property string $street_kanji
 * @property string $flg1
 * @property string $flg2
 * @property string $flg3
 * @property string $flg4
 * @property string $flg5
 * @property string $flg6
 * @property string $flg7
 * @property string $flg8
 * @property string $flg9
 * @property string $flg10
 */
class WbPost extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wb_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jiscode, oldcode, newcode, pref_kana, city_kana, street_kana, pref_kanji, city_kanji, street_kanji, flg1, flg2, flg3, flg4, flg5, flg6, flg7, flg8, flg9, flg10', 'required'),
			array('jiscode, oldcode', 'length', 'max'=>5),
			array('newcode', 'length', 'max'=>7),
			array('pref_kana, city_kanji, street_kanji', 'length', 'max'=>20),
			array('city_kana, street_kana', 'length', 'max'=>40),
			array('pref_kanji', 'length', 'max'=>10),
			array('flg1, flg2, flg3, flg4, flg5, flg6, flg7, flg8, flg9, flg10', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jiscode, oldcode, newcode, pref_kana, city_kana, street_kana, pref_kanji, city_kanji, street_kanji, flg1, flg2, flg3, flg4, flg5, flg6, flg7, flg8, flg9, flg10', 'safe', 'on'=>'search'),
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
			'jiscode' => 'Jiscode',
			'oldcode' => 'Oldcode',
			'newcode' => 'Newcode',
			'pref_kana' => 'Pref Kana',
			'city_kana' => 'City Kana',
			'street_kana' => 'Street Kana',
			'pref_kanji' => 'Pref Kanji',
			'city_kanji' => 'City Kanji',
			'street_kanji' => 'Street Kanji',
			'flg1' => 'Flg1',
			'flg2' => 'Flg2',
			'flg3' => 'Flg3',
			'flg4' => 'Flg4',
			'flg5' => 'Flg5',
			'flg6' => 'Flg6',
			'flg7' => 'Flg7',
			'flg8' => 'Flg8',
			'flg9' => 'Flg9',
			'flg10' => 'Flg10',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('jiscode',$this->jiscode,true);
		$criteria->compare('oldcode',$this->oldcode,true);
		$criteria->compare('newcode',$this->newcode,true);
		$criteria->compare('pref_kana',$this->pref_kana,true);
		$criteria->compare('city_kana',$this->city_kana,true);
		$criteria->compare('street_kana',$this->street_kana,true);
		$criteria->compare('pref_kanji',$this->pref_kanji,true);
		$criteria->compare('city_kanji',$this->city_kanji,true);
		$criteria->compare('street_kanji',$this->street_kanji,true);
		$criteria->compare('flg1',$this->flg1,true);
		$criteria->compare('flg2',$this->flg2,true);
		$criteria->compare('flg3',$this->flg3,true);
		$criteria->compare('flg4',$this->flg4,true);
		$criteria->compare('flg5',$this->flg5,true);
		$criteria->compare('flg6',$this->flg6,true);
		$criteria->compare('flg7',$this->flg7,true);
		$criteria->compare('flg8',$this->flg8,true);
		$criteria->compare('flg9',$this->flg9,true);
		$criteria->compare('flg10',$this->flg10,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WbPost the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
