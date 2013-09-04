<?php

/**
 * This is the model class for table "library".
 *
 * The followings are the available columns in table 'library':
 * @property integer $id
 * @property string $display_name
 * @property string $inner_name
 * @property string $format
 * @property string $store_path
 * @property string $create_date
 * @property string $description
 * @property string $comments
 */
class Library extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'library';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('display_name, inner_name, format, store_path', 'required'),
			array('display_name, inner_name, store_path', 'length', 'max'=>128),
			array('format', 'length', 'max'=>6),
			array('create_date, description, comments', 'safe'),
				
				
			//soong
			array('inner_name, format', 'safe'),
			array('store_path', 'file', 
					'allowEmpty'=>true,				
					'types'=>'jpg, gif, png',				
					'maxSize'=>1024 * 1024 * 1, // 1MB
					'tooLarge'=>'too large',
				),				
				
				
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, display_name, inner_name, format, store_path, create_date, description, comments', 'safe', 'on'=>'search'),
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
			'display_name' => 'Display Name',
			'inner_name' => 'Inner Name',
			'format' => 'Format',
			'store_path' => 'Store Path',
			'create_date' => 'Create Date',
			'description' => 'Description',
			'comments' => 'Comments',
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
		$criteria->compare('display_name',$this->display_name,true);
		$criteria->compare('inner_name',$this->inner_name,true);
		$criteria->compare('format',$this->format,true);
		$criteria->compare('store_path',$this->store_path,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('comments',$this->comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Library the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
