<?php

/**
 * This is the model class for table "movie".
 *
 * The followings are the available columns in table 'movie':
 * @property integer $id
 * @property string $Title
 * @property string $year_released
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 * @property string $synopsis
 *
 * The followings are the available model relations:
 * @property User $createdBy
 * @property User $updatedBy
 * @property MoviePersonResponsibility[] $moviePersonResponsibilities
 */
class Movie extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'movie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Title, year_released, created_by, created_date, updated_by, updated_date', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('Title', 'length', 'max'=>255),
			array('year_released', 'length', 'max'=>4),
			array('synopsis', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Title, year_released, created_by, created_date, updated_by, updated_date, synopsis', 'safe', 'on'=>'search'),
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
			'createdBy' => array(self::BELONGS_TO, 'User', 'created_by'),
			'updatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
			'moviePersonResponsibilities' => array(self::HAS_MANY, 'MoviePersonResponsibility', 'movie_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Title' => 'Title',
			'year_released' => 'Year Released',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
			'updated_by' => 'Updated By',
			'updated_date' => 'Updated Date',
			'synopsis' => 'Synopsis',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('year_released',$this->year_released,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('synopsis',$this->synopsis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Movie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
