<?php

class PagoAlquilerController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view','newalquiler','Selecttres','Selectdos','registrarpago','buscarclientes'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update','newalquiler','Selecttres','Selectdos','registrarpago','buscarclientes'),
'users'=>array('@'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new PagoAlquiler;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['PagoAlquiler']))
{
$model->attributes=$_POST['PagoAlquiler'];
if($model->save())
$this->redirect(array('view','id'=>$model->id_pago_alquiler));
}

$this->render('create',array(
'model'=>$model,
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['PagoAlquiler']))
{
$model->attributes=$_POST['PagoAlquiler'];
if($model->save())
$this->redirect(array('view','id'=>$model->id_pago_alquiler));
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

/**
* Lists all models.
*/
public function actionIndex()
{
$dataProvider=new CActiveDataProvider('PagoAlquiler');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new PagoAlquiler('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['PagoAlquiler']))
$model->attributes=$_GET['PagoAlquiler'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=PagoAlquiler::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='pago-alquiler-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}

public function actionNewAlquiler()
{
	$model=new PagoAlquiler;
    $contrato=new Contrato;
	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

	if(isset($_POST['PagoAlquiler']) && isset($_POST['Contrato'])) 
	{
    $contrato->attributes=$_POST['Contrato'];		
	$model->attributes=$_POST['PagoAlquiler'];
	$contrato->id_cliente=$model->id_cliente;
	$model->observacion='Registro Contrato';
	//1.2.2 ACTUALIZAMOS EL TRAMITE PASO
	$apartamento = Apartamento::model()->updateByPk($model->id_apartamento,array(  
	                          'activo'                 =>1,
	                          'id_cliente'                =>$model->id_cliente	                               
	                                            )); 

	if($contrato->save()){
		$model->id_contrato=$contrato->id_contrato;		
	}
	
	if($model->save())
			$this->redirect(array('view','id'=>$model->id_pago_alquiler));
	}

	$this->render('newalquiler',array(
			'model'=>$model,
			'contrato'=>$contrato
	));
}

public function actionRegistrarPago($id)
{
	//var_dump($id);
	$model=new PagoAlquiler;
    $fecha_ultimo_pago = date("Y-m-d");
//var_dump($fecha_ultimo_pago);die;
    $contrato=Contrato::model()->find('id_cliente=:id_cliente',array(':id_cliente'=>$id));
    $apartamento=Apartamento::model()->find('id_cliente=:id_cliente',array(':id_cliente'=>$id));
    $cliente=Cliente::model()->find('id_cliente=:id_cliente',array(':id_cliente'=>$id));

    //var_dump($cliente);die;
	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

	if(isset($_POST['PagoAlquiler']))
	{
		$model->attributes=$_POST['PagoAlquiler'];
		$saldo_pendiente = $contrato->monto_alquiler - $model->monto;
		$model->monto_alquiler = $contrato->monto_alquiler;
		$model->fecha_ultimo_pago =	$fecha_ultimo_pago;
		$model->id_proyecto = $apartamento->id_proyecto;
		$model->id_edificio = $apartamento->id_edificio;
		$model->id_apartamento = $apartamento->id_apartamento;
		$model->id_cliente = $id;
		$model->id_contrato = $contrato->id_contrato;
	
	if($model->save())
		$this->redirect(array('view','id'=>$model->id_pago_alquiler));
	}

	$this->render('registrarpago',array(
			'model'=>$model,
			'contrato'=>$contrato,
			'cliente'=>$cliente
	));
}

public function actionBuscarClientes()
{
	$model=new Cliente;
	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);
	$model=new Cliente('search');
	$model->unsetAttributes();  // clear any default values

	if(isset($_GET['Cliente']))
			$model->attributes=$_GET['Cliente'];

	$this->render('buscarclientes',array(
			'model'=>$model,
	));
}
public function actionSelectdos(){
            $id_uno = $_GET['PagoAlquiler']['id_proyecto'];
        //  var_dump($id_uno);die;
            $lista = Edificio::model()->findAll('id_proyecto = :id_proyecto',array(':id_proyecto'=>$id_uno));
       
            $lista = CHtml::listData($lista,'id_edificio','nom_edificio');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        }
        
        
        public function actionSelecttres()
        {
            $id_dos = $_POST['PagoAlquiler']['id_edificio'];
            $lista = Apartamento::model()->findAll('id_edificio = :id_edificio',array(':id_edificio'=>$id_dos));
            $lista = CHtml::listData($lista,'id_apartamento','nom_apartamento');
            
            echo CHtml::tag('option', array('value' => ''), 'Seleccione', true);
            
            foreach ($lista as $valor => $descripcion){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
                
            }
            
        } 
}
