<?php
$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	$model->id_apartamento=>array('view','id'=>$model->id_apartamento),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Apartamento','url'=>array('index')),
	array('label'=>'Create Apartamento','url'=>array('create')),
	array('label'=>'View Apartamento','url'=>array('view','id'=>$model->id_apartamento)),
	array('label'=>'Manage Apartamento','url'=>array('admin')),
	);
	?>

	<h1>Update Apartamento <?php echo $model->id_apartamento; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>