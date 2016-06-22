<?php
$this->breadcrumbs=array(
	'Pago Alquilers'=>array('index'),
	$model->id_pago_alquiler,
);

$this->menu=array(
array('label'=>'Listar Pagos de Alquiler','url'=>array('index')),
array('label'=>'Crear nuevo Alquiler','url'=>array('newalquiler')),
//array('label'=>'Generar Contrato','url'=>array('generarcontrato','id'=>$model->id_cliente)),
//array('label'=>'Generar Recibo','url'=>array('generarrecibo','id'=>$model->id_cliente)),
array('label'=>'Actualizar creado Alquiler','url'=>array('update','id'=>$model->id_pago_alquiler)),
array('label'=>'Eliminar Alquiler','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pago_alquiler),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Administrar Alquiler','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">DATOS DEL ALQUILER #<?php echo $model->id_pago_alquiler; ?></button>


<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'idContrato.id_contrato',
		'idCliente.nom_cliente',
		'idCliente.ape_cliente',
		'idProyecto.nom_proyecto',
		'idEdificio.nom_edificio',
		'idApartamento.nom_apartamento',
		'idContrato.cuota_pago',
		'idContrato.monto_alquiler',
		'idContrato.fecha_corte_pago',


),
)); ?>

<a href="#" class="btn btn-warning" role="button">GENERAR CONTRATO</a>
