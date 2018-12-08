<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $user_name
 * @property string $password
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * The followings are the available model relations:
 * @property Movie[] $movies
 * @property Movie[] $movies1
 * @property MoviePersonResponsibility[] $moviePersonResponsibilities
 * @property MoviePersonResponsibility[] $moviePersonResponsibilities1
 * @property Person[] $people
 * @property Person[] $people1
 * @property Responsibility[] $responsibilities
 * @property Responsibility[] $responsibilities1
 * @property Role[] $roles
 * @property Role[] $roles1
 * @property User $createdBy
 * @property User[] $users
 * @property User $updatedBy
 * @property User[] $users1
 * @property UserRole[] $userRoles
 * @property UserRole[] $userRoles1
 * @property UserRole[] $userRoles2
 */
class User extends CActiveRecord
{
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
			array('first_name, last_name, password, created_by, created_date, updated_by, updated_date', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, user_name', 'length', 'max'=>50),
			array('password', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, user_name, password, created_by, created_date, updated_by, updated_date', 'safe', 'on'=>'search'),
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
			'movies' => array(self::HAS_MANY, 'Movie', 'created_by'),
			'movies1' => array(self::HAS_MANY, 'Movie', 'updated_by'),
			'moviePersonResponsibilities' => array(self::HAS_MANY, 'MoviePersonResponsibility', 'created_by'),
			'moviePersonResponsibilities1' => array(self::HAS_MANY, 'MoviePersonResponsibility', 'updated_by'),
			'people' => array(self::HAS_MANY, 'Person', 'created_by'),
			'people1' => array(self::HAS_MANY, 'Person', 'updated_by'),
			'responsibilities' => array(self::HAS_MANY, 'Responsibility', 'created_by'),
			'responsibilities1' => array(self::HAS_MANY, 'Responsibility', 'updated_by'),
			'roles' => array(self::HAS_MANY, 'Role', 'created_by'),
			'roles1' => array(self::HAS_MANY, 'Role', 'updated_by'),
			'createdBy' => array(self::BELONGS_TO, 'User', 'created_by'),
			'users' => array(self::HAS_MANY, 'User', 'created_by'),
			'updatedBy' => array(self::BELONGS_TO, 'User', 'updated_by'),
			'users1' => array(self::HAS_MANY, 'User', 'updated_by'),
			'userRoles' => array(self::HAS_MANY, 'UserRole', 'created_by'),
			'userRoles1' => array(self::HAS_MANY, 'UserRole', 'updated_by'),
			'userRoles2' => array(self::HAS_MANY, 'UserRole', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'user_name' => 'User Name',
			'password' => 'Password',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
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
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
