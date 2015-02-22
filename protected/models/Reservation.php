<?php

/**
 * This is the model class for tb_num "reservation".
 *
 * The followings are the available columns in tb_num 'reservation':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $occasion
 * @property string $note
 * @property string $date
 * @property string $time
 * @property string $status
 * @property string $by
 * @property string $tb_num
 */
class Reservation extends CActiveRecord
{
	/**
	 * @return string the associated database tb_num name
	 */
	public function tb_numName()
	{
		return 'reservation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name,datetime,status, email,phone,occasion,tb_num,date,time,by', 'required'),
			array('name, email, phone,email,tb_num', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>10, 'min'=>10),
			array('note,datetime, date, time', 'safe'),
			array('email', 'email'),
			array('phone', 'numerical', 'integerOnly'=>true),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name,datetime, email, phone, occasion,tb_num, note, date, time, status, by', 'safe', 'on'=>'search'),
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
			'datetime' => 'Reservation Datetime',
			'name' => 'Name',
			'email' => 'Email',
			'phone' => 'Phone',
			'occasion' => 'Number of People',
			'note' => 'Note(Occasion for Birthday, Wedding, Other)',
			'date' => 'Date',
			'time' => 'Time',
			'status' => 'Status',
			'by' => 'Confirm By',
			'tb_num' => 'Table Number',
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

	$criteria=new CDbCriteria(array('order'=>'date ASC','limit'=>10));
	
		$criteria->compare('id',$this->id);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('occasion',$this->occasion,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('by',$this->by,true);
		$criteria->compare('tb_num',$this->tb_num,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	protected function beforeSave()
	{
		$this->date=date('Y-m-d', strtotime($this->date));
		//$this->time=date("H:i",(strtotime($this->time)));   
	
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->date=date('d-m-Y', strtotime($this->date));
		//$this->time=date("H:i",(strtotime($this->time)));
		
		return TRUE;
	}
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
