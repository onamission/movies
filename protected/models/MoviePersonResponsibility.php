<?php

/**
 * This is the model class for table "movie_person_responsibility".
 *
 * The followings are the available columns in table 'movie_person_responsibility':
 * @property integer $id
 * @property integer $movie_id
 * @property integer $person_id
 * @property integer $responsibility_id
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * The followings are the available model relations:
 * @property User $createdBy
 * @property Movie $movie
 * @property Person $person
 * @property Responsibility $responsibility
 * @property User $updatedBy
 */
class MoviePersonResponsibility extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'movie_person_responsibility';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('movie_id, person_id, responsibility_id, created_by, created_date, updated_by, updated_date', 'required'),
			array('movie_id, person_id, responsibility_id, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, movie_id, person_id, responsibility_id, created_by, created_date, updated_by, updated_date', 'safe', 'on'=>'search'),
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
			'movie' => array(self::BELONGS_TO, 'Movie', 'movie_id'),
			'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
			'responsibility' => array(self::BELONGS_TO, 'Responsibility', 'responsibility_id'),
			'updatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'movie_id' => 'Movie',
			'person_id' => 'Person',
			'responsibility_id' => 'Responsibility',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
			'updated_by' => 'Updated By',
			'updated_date' => 'Updated Date',
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
		$criteria->compare('movie_id',$this->movie_id);
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('responsibility_id',$this->responsibility_id);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_date',$this->updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MoviePersonResponsibility the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
