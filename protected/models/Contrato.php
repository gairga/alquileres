<?php

/**
 * This is the model class for table "Contrato".
 *
 * The followings are the available columns in table 'Contrato':
 * @property string $id_contrato
 * @property string $id_cliente
 * @property string $inicio_contrato
 * @property string $fin_contrato
 * @property string $tipo_pago
 * @property string $monto_alquiler
 *
 * The followings are the available model relations:
 * @property PagoAlquiler[] $pagoAlquilers
 */
class Contrato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, inicio_contrato, fin_contrato, tipo_pago, monto_alquiler', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contrato, id_cliente, inicio_contrato, fin_contrato, tipo_pago, monto_alquiler', 'safe', 'on'=>'search'),
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
			'pagoAlquilers' => array(self::HAS_MANY, 'PagoAlquiler', 'id_contrato'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contrato' => 'Id Contrato',
			'id_cliente' => 'Id Cliente',
			'inicio_contrato' => 'Inicio Contrato',
			'fin_contrato' => 'Fin Contrato',
			'tipo_pago' => 'Tipo Pago',
			'monto_alquiler' => 'Monto Alquiler',
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

		$criteria->compare('id_contrato',$this->id_contrato,true);
		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('inicio_contrato',$this->inicio_contrato,true);
		$criteria->compare('fin_contrato',$this->fin_contrato,true);
		$criteria->compare('tipo_pago',$this->tipo_pago,true);
		$criteria->compare('monto_alquiler',$this->monto_alquiler,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
