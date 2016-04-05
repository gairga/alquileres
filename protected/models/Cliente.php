<?php

/**
 * This is the model class for table "Cliente".
 *
 * The followings are the available columns in table 'Cliente':
 * @property string $id_cliente
 * @property string $nom_cliente
 * @property string $ape_cliente
 * @property string $num_identificacion
 * @property string $correo
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_cliente, ape_cliente, num_identificacion, correo', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, nom_cliente, ape_cliente, num_identificacion, correo', 'safe', 'on'=>'search'),
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
			'id_cliente' => 'Id Cliente',
			'nom_cliente' => 'Nom Cliente',
			'ape_cliente' => 'Ape Cliente',
			'num_identificacion' => 'Num Identificacion',
			'correo' => 'Correo',
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

		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('nom_cliente',$this->nom_cliente,true);
		$criteria->compare('ape_cliente',$this->ape_cliente,true);
		$criteria->compare('num_identificacion',$this->num_identificacion,true);
		$criteria->compare('correo',$this->correo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
