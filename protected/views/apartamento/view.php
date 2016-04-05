<?php
$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	$model->id_apartamento,
);

$this->menu=array(
array('label'=>'List Apartamento','url'=>array('index')),
array('label'=>'Create Apartamento','url'=>array('create')),
array('label'=>'Update Apartamento','url'=>array('update','id'=>$model->id_apartamento)),
array('label'=>'Delete Apartamento','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_apartamento),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Apartamento','url'=>array('admin')),
);
?>

<h1>View Apartamento #<?php echo $model->id_apartamento; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_apartamento',
		'id_edificio',
		'nom_apartamento',
		'id_cliente',
		'activo',
),
)); ?>
