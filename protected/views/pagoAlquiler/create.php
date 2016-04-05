<?php
$this->breadcrumbs=array(
	'Pago Alquilers'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PagoAlquiler','url'=>array('index')),
array('label'=>'Manage PagoAlquiler','url'=>array('admin')),
);
?>

<h1>Create PagoAlquiler</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>