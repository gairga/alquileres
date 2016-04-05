<?php

/**
 * This is the model class for table "Tipo_alquiler".
 *
 * The followings are the available columns in table 'Tipo_alquiler':
 * @property string $id_tipo_alquiler
 * @property string $nom_tipo_alquiler
 */
class TipoAlquiler extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Tipo_alquiler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_tipo_alquiler', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo_alquiler, nom_tipo_alquiler', 'safe', 'on'=>'search'),
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
			'id_tipo_alquiler' => 'Id Tipo Alquiler',
			'nom_tipo_alquiler' => 'Nom Tipo Alquiler',
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

		$criteria->compare('id_tipo_alquiler',$this->id_tipo_alquiler,true);
		$criteria->compare('nom_tipo_alquiler',$this->nom_tipo_alquiler,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoAlquiler the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
