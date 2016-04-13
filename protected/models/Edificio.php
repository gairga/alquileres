<?php

/**
 * This is the model class for table "Edificio".
 *
 * The followings are the available columns in table 'Edificio':
 * @property string $id_edificio
 * @property string $nom_edificio
 * @property integer $id_proyecto
 * @property integer $id_apartamento
 * @property string $cant
 * @property integer $pisos
 *
 * The followings are the available model relations:
 * @property Apartamento[] $apartamentos
 * @property PagoAlquiler[] $pagoAlquilers
 * @property Proyecto $idProyecto
 * @property Apartamento $idApartamento
 */
class Edificio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Edificio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proyecto, id_apartamento, pisos', 'numerical', 'integerOnly'=>true),
			array('nom_edificio', 'length', 'max'=>255),
			array('cant', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_edificio, nom_edificio, id_proyecto, id_apartamento, cant, pisos', 'safe', 'on'=>'search'),
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
			'apartamentos' => array(self::HAS_MANY, 'Apartamento', 'id_edificio'),
			'pagoAlquilers' => array(self::HAS_MANY, 'PagoAlquiler', 'id_edificio'),
			'idProyecto' => array(self::BELONGS_TO, 'Proyecto', 'id_proyecto'),
			'idApartamento' => array(self::BELONGS_TO, 'Apartamento', 'id_apartamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_edificio' => 'ID Edificio',
			'nom_edificio' => 'Nombre de la Torre',
			'id_proyecto' => 'Proyecto',
			'id_apartamento' => 'ID Apartamento',
			'cant' => 'Cantidad del Apartamentos',
			'pisos' => 'Pisos',
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

		$criteria->compare('id_edificio',$this->id_edificio,true);
		$criteria->compare('nom_edificio',$this->nom_edificio,true);
		$criteria->compare('id_proyecto',$this->id_proyecto);
		$criteria->compare('id_apartamento',$this->id_apartamento);
		$criteria->compare('cant',$this->cant,true);
		$criteria->compare('pisos',$this->pisos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Edificio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
