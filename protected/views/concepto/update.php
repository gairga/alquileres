<?php
$this->breadcrumbs=array(
	'Conceptos'=>array('index'),
	$model->id_concepto=>array('view','id'=>$model->id_concepto),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Concepto','url'=>array('index')),
	array('label'=>'Create Concepto','url'=>array('create')),
	array('label'=>'View Concepto','url'=>array('view','id'=>$model->id_concepto)),
	array('label'=>'Manage Concepto','url'=>array('admin')),
	);
	?>

	<h1>Update Concepto <?php echo $model->id_concepto; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>