<?php
$this->breadcrumbs=array(
	'Pago Alquilers'=>array('index'),
	$model->id_pago_alquiler,
);

$this->menu=array(
array('label'=>'Listar Pagos de Alquiler','url'=>array('index')),
array('label'=>'Crear nuevo Alquiler','url'=>array('newalquiler')),
array('label'=>'Actualizar creado Alquiler','url'=>array('update','id'=>$model->id_pago_alquiler)),
array('label'=>'Eliminar Alquiler','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pago_alquiler),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar Alquiler','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">DATOS DEL ALQUILER #<?php echo $model->id_pago_alquiler; ?></button>


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
		'idProyecto.nom_proyecto',
		'idEdificio.nom_edificio',
		'idApartamento.nom_apartamento',
		'idCliente.nom_cliente',
		'idCliente.ape_cliente',
),
)); ?>
