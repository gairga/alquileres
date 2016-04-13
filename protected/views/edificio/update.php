<?php
$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	$model->id_edificio=>array('view','id'=>$model->id_edificio),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Edificio','url'=>array('index')),
	array('label'=>'Create Edificio','url'=>array('create')),
	array('label'=>'View Edificio','url'=>array('view','id'=>$model->id_edificio)),
	array('label'=>'Manage Edificio','url'=>array('admin')),
	);
	?>

<button type="button" class="btn btn-warning">ACTUALIZAR TORRE #<?php echo $model->id_edificio; ?></button

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>