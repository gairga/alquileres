<?php
$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	'Registrar Alquiler',
);

$this->menu=array(
array('label'=>'List Apartamento','url'=>array('index')),
array('label'=>'Manage Apartamento','url'=>array('admin')),
);
?>

<h1></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>