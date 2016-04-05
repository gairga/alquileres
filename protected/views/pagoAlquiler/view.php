<?php
$this->breadcrumbs=array(
	'Pago Alquilers'=>array('index'),
	$model->id_pago_alquiler,
);

$this->menu=array(
array('label'=>'List PagoAlquiler','url'=>array('index')),
array('label'=>'Create PagoAlquiler','url'=>array('create')),
array('label'=>'Update PagoAlquiler','url'=>array('update','id'=>$model->id_pago_alquiler)),
array('label'=>'Delete PagoAlquiler','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pago_alquiler),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PagoAlquiler','url'=>array('admin')),
);
?>

<h1>View PagoAlquiler #<?php echo $model->id_pago_alquiler; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_pago_alquiler',
		'id_contrato',
		'fecha_corte_pago',
		'cuota_pago',
		'cuota_mensual',
		'monto_pagado',
		'saldo_pendiente',
		'fecha_ultimo_pago',
		'monto_alquiler',
),
)); ?>
