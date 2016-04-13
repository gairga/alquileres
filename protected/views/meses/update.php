<?php
$this->breadcrumbs=array(
	'Meses'=>array('index'),
	$model->id_meses=>array('view','id'=>$model->id_meses),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Meses','url'=>array('index')),
	array('label'=>'Create Meses','url'=>array('create')),
	array('label'=>'View Meses','url'=>array('view','id'=>$model->id_meses)),
	array('label'=>'Manage Meses','url'=>array('admin')),
	);
	?>

	<h1>Update Meses <?php echo $model->id_meses; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>