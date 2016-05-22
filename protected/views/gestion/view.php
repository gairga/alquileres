<?php
$this->breadcrumbs=array(
	'Gestions'=>array('index'),
	$model->id_gestion,
);

$this->menu=array(
array('label'=>'List Gestion','url'=>array('index')),
array('label'=>'Create Gestion','url'=>array('create')),
array('label'=>'Update Gestion','url'=>array('update','id'=>$model->id_gestion)),
array('label'=>'Delete Gestion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gestion),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Gestion','url'=>array('admin')),
);
?>

<h1>View Gestion #<?php echo $model->id_gestion; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_gestion',
		'contactado_llamada',
		'llamada_voz',
		'id_acuerdo_cobros',
		'fecha_acuerdo',
		'id_gestion_llamadas',
		'observaciones',
		'id_cumplimiento',
		'id_cliente',
		'id_proyecto',
		'id_usuario',
		'fecha_creacion',
),
)); ?>
