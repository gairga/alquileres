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
 * @property string $direccion
 * @property string $telefono
 * @property string $ocupacion
 * @property string $celular
 * @property string $sexo
 * @property string $estado_civil
 * @property string $lugar_trabajo
 * @property string $direccion_de_trabajo
 * @property string $telef_trabajo
 * @property string $pais
 * @property string $nacionalidad
 * @property string $referencia_personal
 * @property string $telef_referencia
 *
 * The followings are the available model relations:
 * @property PagoAlquiler[] $pagoAlquilers
 * @property Contrato[] $contratos
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
			array('direccion, telefono, ocupacion, celular, sexo, estado_civil, lugar_trabajo, direccion_de_trabajo, telef_trabajo, pais, nacionalidad, referencia_personal, telef_referencia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, nom_cliente, ape_cliente, num_identificacion, correo, direccion, telefono, ocupacion, celular, sexo, estado_civil, lugar_trabajo, direccion_de_trabajo, telef_trabajo, pais, nacionalidad, referencia_personal, telef_referencia', 'safe', 'on'=>'search'),
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
			'pagoAlquilers' => array(self::HAS_MANY, 'PagoAlquiler', 'id_cliente'),
			'contratos' => array(self::HAS_MANY, 'Contrato', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Cod Cliente',
			'nom_cliente' => 'Nombre del Cliente',
			'ape_cliente' => 'Apellido del Cliente',
			'num_identificacion' => 'Num Identificacion',
			'correo' => 'Correo',
			'direccion' => 'Dirección',
			'telefono' => 'Telefono',
			'ocupacion' => 'Ocupación',
			'celular' => 'Celular',
			'sexo' => 'Sexo',
			'estado_civil' => 'Estado Civil',
			'lugar_trabajo' => 'Lugar Trabajo',
			'direccion_de_trabajo' => 'Direccion De Trabajo',
			'telef_trabajo' => 'Telef Trabajo',
			'pais' => 'Pais',
			'nacionalidad' => 'Nacionalidad',
			'referencia_personal' => 'Referencia Personal',
			'telef_referencia' => 'Telef Referencia',
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
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('lugar_trabajo',$this->lugar_trabajo,true);
		$criteria->compare('direccion_de_trabajo',$this->direccion_de_trabajo,true);
		$criteria->compare('telef_trabajo',$this->telef_trabajo,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('referencia_personal',$this->referencia_personal,true);
		$criteria->compare('telef_referencia',$this->telef_referencia,true);

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
