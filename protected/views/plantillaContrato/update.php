<?php
$this->breadcrumbs=array(
	'Plantilla Contratos'=>array('index'),
	$model->id_plantilla_contrato=>array('view','id'=>$model->id_plantilla_contrato),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PlantillaContrato','url'=>array('index')),
	array('label'=>'Create PlantillaContrato','url'=>array('create')),
	array('label'=>'View PlantillaContrato','url'=>array('view','id'=>$model->id_plantilla_contrato)),
	array('label'=>'Manage PlantillaContrato','url'=>array('admin')),
	);
	?>

	<h1>Update PlantillaContrato <?php echo $model->id_plantilla_contrato; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>