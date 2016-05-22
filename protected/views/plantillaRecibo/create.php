<?php
$this->breadcrumbs=array(
	'Plantilla Recibos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PlantillaRecibo','url'=>array('index')),
array('label'=>'Manage PlantillaRecibo','url'=>array('admin')),
);
?>

<h1>Create PlantillaRecibo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>