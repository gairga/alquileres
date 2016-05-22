<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente,
);

$this->menu=array(
array('label'=>'List Cliente','url'=>array('index')),
array('label'=>'Create Cliente','url'=>array('create')),
array('label'=>'Update Cliente','url'=>array('update','id'=>$model->id_cliente)),
array('label'=>'Delete Cliente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Cliente','url'=>array('admin')),
);
?>

<button type="button" class="btn btn-warning">CLIENTE #<?php echo $model->id_cliente; ?></button>


<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_cliente',
		'nom_cliente',
		'ape_cliente',
		'num_identificacion',
		'correo',
		'direccion',
		'telefono',
		'ocupacion',
		'celular',
		'sexo',
		'estado_civil',
		'lugar_trabajo',
		'direccion_de_trabajo',
		'telef_trabajo',
		'pais',
		'nacionalidad',
		'referencia_personal',
		'telef_referencia',
),
)); ?>
