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

	<h1>Update Edificio <?php echo $model->id_edificio; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>