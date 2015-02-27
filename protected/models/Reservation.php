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
			array('price,title,type_id','required'),
			array('image', 'length', 'max'=>45),
			array('title', 'length', 'max'=>150),
			array('price, datetime', 'safe'),
			//array('price', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image, title, price, name,phone, datetime,type_id', 'safe', 'on'=>'search'),
	
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
				'type' => array(self::BELONGS_TO, 'Type', 'type_id')
		);;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		/*return array(
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
		);*/
		return array(
				'id' => 'ID',
				'image' => 'Image',
				'title' => 'nameres',
				'description' => 'dddd',
				//'address' => 'Title',
				//'businesshours' => 'description',
				//'phone' => 'Title',
				//'score' => 'Phone',
				'datetime' => 'Date time',
				'type_id' => 'Type',
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

	//$criteria=new CDbCriteria(array('order'=>'date ASC','limit'=>10));
	
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('type_id',$this->type_id,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
				'pagination'=>array(
						'pageSize'=>8,
				),
		));
	}
	/*protected function beforeSave()
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
	*/
	
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
