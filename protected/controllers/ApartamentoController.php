<?php

class ApartamentoController extends Controller
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
		'actions'=>array('index','view','listarapartamento','SelectEdificio','SelectApartamento'),
		'users'=>array('*'),
	),
	array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions'=>array('create','update','listarapartamento'),
		'users'=>array('@'),
	),
	array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions'=>array('admin','delete','listarapartamento'),
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

public function actionListarApartamento()
{
	$model=new Apartamento;
	$this->render('listarapartamento',array(
		'model'=>$model,
	));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
	$model=new Apartamento;
	$cliente = new Cliente;
    $clienteall = $cliente->findAll(); 
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

	if(isset($_POST['Apartamento']))
	{
		$model->attributes=$_POST['Apartamento'];
		if($model->save())
			$this->redirect(array('view','id'=>$model->id_apartamento));
	}

	$this->render('create',array(
		'model'=>$model,
		'cliente'=>$cliente,
		'clienteall'=>$clienteall,
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

	if(isset($_POST['Apartamento']))
	{
		$model->attributes=$_POST['Apartamento'];
		if($model->save())
			$this->redirect(array('view','id'=>$model->id_apartamento));
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
	}else
		throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

/**
* Lists all models.
*/
public function actionIndex()
{
$dataProvider=new CActiveDataProvider('Apartamento');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Apartamento('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Apartamento']))
$model->attributes=$_GET['Apartamento'];

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
$model=Apartamento::model()->findByPk($id);
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
	if(isset($_POST['ajax']) && $_POST['ajax']==='apartamento-form')
	{
		echo CActiveForm::validate($model);
		Yii::app()->end();
	}
}

public function actionSelectEdificio()
        {
             $id_un = $_GET['id_proyecto'];
             $lista = Edificio::model()->findAll('idProyecto = :id_proyecto',array(':id_uno' => $id_uno));
             $lista = CHtml::listData($lista, 'id_edificio', 'nom_edificio');

                        echo CHtml::tag('option',array('value' => ''),'Seleccione un Edificio...',true);
                    foreach($lista as $valor => $municipio)
            {
                echo CHtml::tag('option',array('value' => $valor),CHtml::encode($municipio), true);
            }

        }

public function actionSelectApartamento()
        {
                 $id_dos= $_POST['TblMunicipio']['id']; 
            //$lista2 = TblParroquia::model()->findAll('idmunicipio = :id_dos',array(':id_dos' => $id_dos));
             $lista2 = TblParroquia::model()->findAll('idmunicipio = :id_dos',array(':id_dos' => $id_dos));
             $lista2 = CHtml::listData($lista2, 'id', 'parroquia');

                        echo CHtml::tag('option',array('value' => ''),'Seleccione un Parroquia...',true);
                    foreach($lista2 as $valor2 => $parroquia)
            {
                echo CHtml::tag('option',array('value' => $valor2),CHtml::encode($parroquia), true);
            }

        }        

}
