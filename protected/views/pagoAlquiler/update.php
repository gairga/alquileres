<?php
$this->breadcrumbs=array(
	'Pago Alquilers'=>array('index'),
	$model->id_pago_alquiler=>array('view','id'=>$model->id_pago_alquiler),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PagoAlquiler','url'=>array('index')),
	array('label'=>'Create PagoAlquiler','url'=>array('create')),
	array('label'=>'View PagoAlquiler','url'=>array('view','id'=>$model->id_pago_alquiler)),
	array('label'=>'Manage PagoAlquiler','url'=>array('admin')),
	);
	?>

	<h1>Update PagoAlquiler <?php echo $model->id_pago_alquiler; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>