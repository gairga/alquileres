<?php
$this->breadcrumbs=array(
	'Plantilla Recibos'=>array('index'),
	$model->id_plantilla_recibo=>array('view','id'=>$model->id_plantilla_recibo),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PlantillaRecibo','url'=>array('index')),
	array('label'=>'Create PlantillaRecibo','url'=>array('create')),
	array('label'=>'View PlantillaRecibo','url'=>array('view','id'=>$model->id_plantilla_recibo)),
	array('label'=>'Manage PlantillaRecibo','url'=>array('admin')),
	);
	?>

	<h1>Update PlantillaRecibo <?php echo $model->id_plantilla_recibo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>