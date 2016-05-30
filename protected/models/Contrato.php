<?php

/**
 * This is the model class for table "Contrato".
 *
 * The followings are the available columns in table 'Contrato':
 * @property string $id_contrato
 * @property string $id_cliente
 * @property string $inicio_contrato
 * @property string $fin_contrato
 * @property integer $id_tipo_pago
 * @property string $monto_alquiler
 * @property string $cuota_pago
 * @property string $fecha_corte_pago
 * @property string $nom_cliente
 * @property string $ape_cliente
 * @property integer $id_proyecto
 *
 * The followings are the available model relations:
 * @property PagoAlquiler[] $pagoAlquilers
 * @property Contrato $idContrato
 * @property Contrato $contrato
 * @property Cliente $idCliente
 * @property Proyecto $idProyecto
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
			array('id_tipo_pago, id_proyecto', 'numerical', 'integerOnly'=>true),
			array('id_cliente, inicio_contrato, fin_contrato, monto_alquiler, cuota_pago, fecha_corte_pago, nom_cliente, ape_cliente', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contrato, id_cliente, inicio_contrato, fin_contrato, id_tipo_pago, monto_alquiler, cuota_pago, fecha_corte_pago, nom_cliente, ape_cliente, id_proyecto', 'safe', 'on'=>'search'),
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
			'idContrato' => array(self::BELONGS_TO, 'Contrato', 'id_contrato'),
			'contrato' => array(self::HAS_ONE, 'Contrato', 'id_contrato'),
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idProyecto' => array(self::BELONGS_TO, 'Proyecto', 'id_proyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contrato' => 'Num. Contrato',
			'id_cliente' => 'Id Cliente',
			'inicio_contrato' => 'Inicio Contrato',
			'fin_contrato' => 'Fin Contrato',
			'id_tipo_pago' => 'Id Tipo Pago',
			'monto_alquiler' => 'Monto Alquiler',
			'cuota_pago' => 'Cuota Pago',
			'fecha_corte_pago' => 'Fecha Corte Pago',
			'nom_cliente' => 'Nom Cliente',
			'ape_cliente' => 'Ape Cliente',
			'id_proyecto' => 'Id Proyecto',
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
		$criteria->compare('id_tipo_pago',$this->id_tipo_pago);
		$criteria->compare('monto_alquiler',$this->monto_alquiler,true);
		$criteria->compare('cuota_pago',$this->cuota_pago,true);
		$criteria->compare('fecha_corte_pago',$this->fecha_corte_pago,true);
		$criteria->compare('nom_cliente',$this->nom_cliente,true);
		$criteria->compare('ape_cliente',$this->ape_cliente,true);
		$criteria->compare('id_proyecto',$this->id_proyecto);

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
