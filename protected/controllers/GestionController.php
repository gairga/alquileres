<?php

class GestionController extends Controller
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
    'actions'=>array('index','view','inicio','buscarcliente','gestioncliente'),
    'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
    'actions'=>array('create','update','inicio','buscarcliente','gestioncliente'),
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
public function actionCreate($id)
{
    $model=new Gestion;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);
    $cliente=Cliente::model()->find('id_cliente=:id_cliente',
                       array(':id_cliente'=>$id));
    $contrato=Contrato::model()->find('id_cliente=:id_cliente',
                             array(':id_cliente'=>$id));
    if(isset($_POST['Gestion']))
    {
    $model->attributes=$_POST['Gestion'];
    if($model->save())
      $this->redirect(array('view','id'=>$model->id_gestion));
    }

    $this->render('create',array(
        'model'=>$model,
        'cliente'=>$cliente,
        'contrato'=>$contrato,
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

if(isset($_POST['Gestion']))
{
$model->attributes=$_POST['Gestion'];
    if($model->save())
    $this->redirect(array('view','id'=>$model->id_gestion));
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
$dataProvider=new CActiveDataProvider('Gestion');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Gestion('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Gestion']))
$model->attributes=$_GET['Gestion'];

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
$model=Gestion::model()->findByPk($id);
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
if(isset($_POST['ajax']) && $_POST['ajax']==='gestion-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}

public function actionInicio()
	{
            
            //Mas Buscados - Clientes con 90 dias
            $cliente = new Cliente('search');

            $cliente->unsetAttributes();
            
            $model=new Gestion('search');  
            $model->unsetAttributes();
     
            if(isset($_GET['Cliente'])){
                            $cliente->attributes=$_GET['Cliente'];
                     //       $retiro->attributes=$_GET['Cliente'];
                        // print_r($_GET['Customers']);
            }

         
            if(isset($_GET['Gestion'])){
                            $model->attributes=$_GET['Gestion'];
                        // print_r($_GET['Customers']);
            }		
		
                     
                
		$this->render('inicio',array(
                    'model'=>$model,
                    'cliente'=>$cliente,
                 //   'retiro'=>$retiro                  
		));
             
        
	}

	public function actionBuscarCliente()
{
	$contrato=new Contrato;
	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);
	$contrato=new Contrato('search');
	$contrato->unsetAttributes();  // clear any default values

	if(isset($_GET['Contrato']))
			$contrato->attributes=$_GET['Contrato'];

	$this->render('buscarcliente',array(
			'contrato'=>$contrato,
	));
}

public function actionGestionCliente()
{
    $model=new Cliente('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['Cliente']))
         $model->attributes=$_GET['Cliente'];

    $this->render('admin',array(
         'model'=>$model,
    ));
}


}
