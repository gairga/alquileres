<?php

/**
 * This is the model class for table "Pago_alquiler".
 *
 * The followings are the available columns in table 'Pago_alquiler':
 * @property integer $id_pago_alquiler
 * @property integer $id_contrato
 * @property string $fecha_pago
 * @property string $monto_pagado
 * @property string $saldo_pendiente
 * @property string $fecha_ultimo_pago
 * @property string $monto_alquiler
 * @property integer $id_proyecto
 * @property integer $id_edificio
 * @property integer $id_apartamento
 * @property integer $id_cliente
 * @property string $num_recibo
 * @property string $concepto
 * @property string $monto
 * @property string $observacion
 * @property integer $id_meses
 *
 * The followings are the available model relations:
 * @property Proyecto $idProyecto
 * @property Edificio $idEdificio
 * @property Apartamento $idApartamento
 * @property Cliente $idCliente
 * @property Contrato $idContrato
 * @property Meses $idMeses
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
			array('id_contrato, id_proyecto, id_edificio, id_apartamento, id_cliente, id_meses', 'numerical', 'integerOnly'=>true),
			array('fecha_pago, monto_pagado, saldo_pendiente, fecha_ultimo_pago, monto_alquiler, num_recibo, concepto, monto, observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pago_alquiler, id_contrato, fecha_pago, monto_pagado, saldo_pendiente, fecha_ultimo_pago, monto_alquiler, id_proyecto, id_edificio, id_apartamento, id_cliente, num_recibo, concepto, monto, observacion, id_meses', 'safe', 'on'=>'search'),
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
			'idProyecto' => array(self::BELONGS_TO, 'Proyecto', 'id_proyecto'),
			'idEdificio' => array(self::BELONGS_TO, 'Edificio', 'id_edificio'),
			'idApartamento' => array(self::BELONGS_TO, 'Apartamento', 'id_apartamento'),
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idContrato' => array(self::BELONGS_TO, 'Contrato', 'id_contrato'),
			'idMeses' => array(self::BELONGS_TO, 'Meses', 'id_meses'),
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
			'fecha_pago' => 'Fecha Pago',
			'monto_pagado' => 'Monto Pagado',
			'saldo_pendiente' => 'Saldo Pendiente',
			'fecha_ultimo_pago' => 'Fecha Ultimo Pago',
			'monto_alquiler' => 'Monto Alquiler',
			'id_proyecto' => 'Id Proyecto',
			'id_edificio' => 'Id Edificio',
			'id_apartamento' => 'Id Apartamento',
			'id_cliente' => 'Id Cliente',
			'num_recibo' => 'Num Recibo',
			'concepto' => 'Concepto',
			'monto' => 'Monto',
			'observacion' => 'Observacion',
			'id_meses' => 'Pago Correspondiente al Corte',
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
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('monto_pagado',$this->monto_pagado,true);
		$criteria->compare('saldo_pendiente',$this->saldo_pendiente,true);
		$criteria->compare('fecha_ultimo_pago',$this->fecha_ultimo_pago,true);
		$criteria->compare('monto_alquiler',$this->monto_alquiler,true);
		$criteria->compare('id_proyecto',$this->id_proyecto);
		$criteria->compare('id_edificio',$this->id_edificio);
		$criteria->compare('id_apartamento',$this->id_apartamento);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('num_recibo',$this->num_recibo,true);
		$criteria->compare('concepto',$this->concepto,true);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('id_meses',$this->id_meses);

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
