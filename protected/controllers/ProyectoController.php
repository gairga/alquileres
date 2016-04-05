<?php

class ProyectoController extends Controller
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
		'actions'=>array('index','view','asociaredificio'),
		'users'=>array('*'),
	),
	array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions'=>array('create','update','asociaredificio'),
		'users'=>array('@'),
	),
	array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions'=>array('admin','delete','asociaredificio'),
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

///******************************////////////

public function actionAsociarEdificio()
{
	/*$model=new Proyecto('search');
	$edificio=new Edificio('search');

	$model->unsetAttributes();  // clear any default values
	if(isset($_GET['Proyecto']))
		$model->attributes=$_GET['Proyecto'];

		$this->render('asociaredificio',array(
		'model'=>$model,
		'edificio'=>$edificio
	));*/

  	  $model=new Proyecto;  // User Model
    $addressModel_1 = new Edificio;  // Address Model
    $addressModel_2 = new Edificio;  // Address Model
 
    if(!empty($_POST))
    {
        // Set attribute for home address
        $addressModel_1->attributes=$_POST['Address'][1];
        // Set attribute for company address
        $addressModel_2->attributes=$_POST['Address'][2];
        // Set attribute for user data
        $model->attributes=$_POST['User'];  
 
        // Validate all three model
        $valid=$addressModel_1->validate();
        $valid=$addressModel_2->validate() && $valid;
        $valid=$model->validate() && $valid;
 
        if($valid)
        { 
            $addressModel_1->save();
            $homeAddressId = $addressModel_1->id;
 
            $addressModel_2->save();
            $companyAddressId = $addressModel_2->id;
 
            // Set saved address as user home id
            $model->home_address_id = $homeAddressId;
            // Set saved address as user company id
            $model->company_address_id = $companyAddressId;  
            $model->save();
            $this->redirect(array('view','id'=>$model->id));
        }
    }
    $this->render('asociaredificio',array(
        'model'=>$model,
        'addressModel_1'=>$addressModel_1,
        'addressModel_2'=>$addressModel_2,
    ));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Proyecto;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

	if(isset($_POST['Proyecto']))
	{
		$model->attributes=$_POST['Proyecto'];
		if($model->save())
			$this->redirect(array('view','id'=>$model->id_proyecto));
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

	if(isset($_POST['Proyecto']))
	{
	$model->attributes=$_POST['Proyecto'];
	if($model->save())
		$this->redirect(array('view','id'=>$model->id_proyecto));
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
	$dataProvider=new CActiveDataProvider('Proyecto');
	$this->render('index',array(
		'dataProvider'=>$dataProvider,
	));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
	$model=new Proyecto('search');
	$model->unsetAttributes();  // clear any default values
	if(isset($_GET['Proyecto']))
		$model->attributes=$_GET['Proyecto'];

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
	$model=Proyecto::model()->findByPk($id);
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
	if(isset($_POST['ajax']) && $_POST['ajax']==='proyecto-form')
	{
		echo CActiveForm::validate($model);
		Yii::app()->end();
	}
	}
}


