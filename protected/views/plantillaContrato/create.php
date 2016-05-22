<?php
$this->breadcrumbs=array(
	'Plantilla Contratos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PlantillaContrato','url'=>array('index')),
array('label'=>'Manage PlantillaContrato','url'=>array('admin')),
);
?>

<h1>Create PlantillaContrato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>