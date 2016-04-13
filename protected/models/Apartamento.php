<?php

/**
 * This is the model class for table "Apartamento".
 *
 * The followings are the available columns in table 'Apartamento':
 * @property string $id_apartamento
 * @property string $id_edificio
 * @property string $nom_apartamento
 * @property string $id_cliente
 * @property string $activo
 * @property integer $id_proyecto
 * @property string $metraje_apartamento
 * @property string $num_estacionamiento
 * @property string $esquina
 *
 * The followings are the available model relations:
 * @property PagoAlquiler[] $pagoAlquilers
 * @property Edificio[] $edificios
 * @property Edificio $idEdificio
 * @property Proyecto $idProyecto
 */
class Apartamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Apartamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proyecto', 'numerical', 'integerOnly'=>true),
			array('nom_apartamento', 'length', 'max'=>255),
			array('id_edificio, id_cliente, activo, metraje_apartamento, num_estacionamiento, esquina', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_apartamento, id_edificio, nom_apartamento, id_cliente, activo, id_proyecto, metraje_apartamento, num_estacionamiento, esquina', 'safe', 'on'=>'search'),
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
			'pagoAlquilers' => array(self::HAS_MANY, 'PagoAlquiler', 'id_apartamento'),
			'edificios' => array(self::HAS_MANY, 'Edificio', 'id_apartamento'),
			'idEdificio' => array(self::BELONGS_TO, 'Edificio', 'id_edificio'),
			'idProyecto' => array(self::BELONGS_TO, 'Proyecto', 'id_proyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_apartamento' => 'Id Apartamento',
			'id_edificio' => 'Id Edificio',
			'nom_apartamento' => 'Nom Apartamento',
			'id_cliente' => 'Id Cliente',
			'activo' => 'Activo',
			'id_proyecto' => 'Id Proyecto',
			'metraje_apartamento' => 'Metraje Apartamento',
			'num_estacionamiento' => 'Num Estacionamiento',
			'esquina' => 'Esquina',
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

		$criteria->compare('id_apartamento',$this->id_apartamento,true);
		$criteria->compare('nom_apartamento',$this->nom_apartamento,true);
		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('activo',$this->activo,true);
		$criteria->compare('metraje_apartamento',$this->metraje_apartamento,true);
		$criteria->compare('num_estacionamiento',$this->num_estacionamiento,true);
		$criteria->compare('id_edificio',$this->id_edificio);
		$criteria->compare('id_proyecto',$this->id_proyecto);
		$criteria->compare('esquina',$this->esquina,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
