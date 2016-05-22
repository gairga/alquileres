<?php

/**
 * This is the model class for table "gestion".
 *
 * The followings are the available columns in table 'gestion':
 * @property integer $id_gestion
 * @property integer $contactado_llamada
 * @property integer $llamada_voz
 * @property integer $id_acuerdo_cobros
 * @property string $fecha_acuerdo
 * @property integer $id_gestion_llamadas
 * @property string $observaciones
 * @property integer $id_cumplimiento
 * @property integer $id_cliente
 * @property string $id_proyecto
 * @property integer $id_usuario
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property Cliente $idCliente
 * @property AcuerdoCobros $idAcuerdoCobros
 */
class Gestion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gestion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contactado_llamada, id_acuerdo_cobros', 'required'),
			array('contactado_llamada, llamada_voz, id_acuerdo_cobros, id_gestion_llamadas, id_cumplimiento, id_cliente, id_usuario', 'numerical', 'integerOnly'=>true),
			array('fecha_acuerdo, observaciones, id_proyecto, fecha_creacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_gestion, contactado_llamada, llamada_voz, id_acuerdo_cobros, fecha_acuerdo, id_gestion_llamadas, observaciones, id_cumplimiento, id_cliente, id_proyecto, id_usuario, fecha_creacion', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idAcuerdoCobros' => array(self::BELONGS_TO, 'AcuerdoCobros', 'id_acuerdo_cobros'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_gestion' => 'Id Gestion',
			'contactado_llamada' => 'Contactado Llamada',
			'llamada_voz' => 'Llamada Voz',
			'id_acuerdo_cobros' => 'Acuerdo de Cobro',
			'fecha_acuerdo' => 'Fecha Acuerdo',
			'id_gestion_llamadas' => 'Id Gestion Llamadas',
			'observaciones' => 'Observaciones',
			'id_cumplimiento' => 'Id Cumplimiento',
			'id_cliente' => 'Id Cliente',
			'id_proyecto' => 'Id Proyecto',
			'id_usuario' => 'Id Usuario',
			'fecha_creacion' => 'Fecha Creacion',
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

		$criteria->compare('id_gestion',$this->id_gestion);
		$criteria->compare('contactado_llamada',$this->contactado_llamada);
		$criteria->compare('llamada_voz',$this->llamada_voz);
		$criteria->compare('id_acuerdo_cobros',$this->id_acuerdo_cobros);
		$criteria->compare('fecha_acuerdo',$this->fecha_acuerdo,true);
		$criteria->compare('id_gestion_llamadas',$this->id_gestion_llamadas);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('id_cumplimiento',$this->id_cumplimiento);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_proyecto',$this->id_proyecto,true);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	  public function agendagestion()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
//$criteria->addSearchCondition('upper(t.NOMBRE)',strtoupper($this->NOMBRE),true,'OR')
                $criteria->condition = 'id_cumplimiento !=1 ';
           
$now = new CDbExpression('NOW()::date');
//$criteria->addCondition('fecha_acuerdo >= NOW()::date '); 
$criteria->addCondition('fecha_acuerdo <= DATE(NOW()) ');
		$criteria->compare('fecha_creacion',$this->fecha_creacion);
		$criteria->compare('id_gestion',$this->id_gestion);
		$criteria->compare('contactado_llamada',$this->contactado_llamada);
		$criteria->compare('llamada_voz',$this->llamada_voz);
		$criteria->compare('id_acuerdo_cobros',$this->id_acuerdo_cobros);
		$criteria->compare('fecha_acuerdo',$this->fecha_acuerdo,true);
		$criteria->compare('id_gestion_llamadas',$this->id_gestion_llamadas);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('id_cumplimiento',$this->id_cumplimiento);
		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('id_crm_proyecto',$this->id_crm_proyecto,true);
		$criteria->compare('id_usuario',$this->id_usuario);
        $criteria->order = 'fecha_creacion desc';
                                
		$criteria->limit = 20;
                $criteria->offset = 0;
                return new CActiveDataProvider($this, array(
                        'criteria'=> $criteria,     
                        'pagination' => array('pageSize' => 5),

                'totalItemCount'=>'10',
                ));    
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gestion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
