<?php

/**
 * This is the model class for table "Pago_alquiler".
 *
 * The followings are the available columns in table 'Pago_alquiler':
 * @property integer $id_pago_alquiler
 * @property integer $id_contrato
 * @property string $fecha_corte_pago
 * @property string $cuota_pago
 * @property string $cuota_mensual
 * @property string $monto_pagado
 * @property string $saldo_pendiente
 * @property string $fecha_ultimo_pago
 * @property string $monto_alquiler
 */
class PagoAlquiler extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pago_alquiler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_contrato', 'numerical', 'integerOnly'=>true),
			array('fecha_corte_pago, cuota_pago, cuota_mensual, monto_pagado, saldo_pendiente, fecha_ultimo_pago, monto_alquiler', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pago_alquiler, id_contrato, fecha_corte_pago, cuota_pago, cuota_mensual, monto_pagado, saldo_pendiente, fecha_ultimo_pago, monto_alquiler', 'safe', 'on'=>'search'),
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
			'id_pago_alquiler' => 'Id Pago Alquiler',
			'id_contrato' => 'Id Contrato',
			'fecha_corte_pago' => 'Fecha Corte Pago',
			'cuota_pago' => 'Cuota Pago',
			'cuota_mensual' => 'Cuota Mensual',
			'monto_pagado' => 'Monto Pagado',
			'saldo_pendiente' => 'Saldo Pendiente',
			'fecha_ultimo_pago' => 'Fecha Ultimo Pago',
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

		$criteria->compare('id_pago_alquiler',$this->id_pago_alquiler);
		$criteria->compare('id_contrato',$this->id_contrato);
		$criteria->compare('fecha_corte_pago',$this->fecha_corte_pago,true);
		$criteria->compare('cuota_pago',$this->cuota_pago,true);
		$criteria->compare('cuota_mensual',$this->cuota_mensual,true);
		$criteria->compare('monto_pagado',$this->monto_pagado,true);
		$criteria->compare('saldo_pendiente',$this->saldo_pendiente,true);
		$criteria->compare('fecha_ultimo_pago',$this->fecha_ultimo_pago,true);
		$criteria->compare('monto_alquiler',$this->monto_alquiler,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PagoAlquiler the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
