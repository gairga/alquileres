<?php
$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->id_contrato,
);

$this->menu=array(
array('label'=>'List Contrato','url'=>array('index')),
array('label'=>'Create Contrato','url'=>array('create')),

array('label'=>'Update Contrato','url'=>array('update','id'=>$model->id_contrato)),
array('label'=>'Delete Contrato','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contrato),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Contrato','url'=>array('admin')),
);
?>

<h1>View Contrato #<?php echo $model->id_contrato; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_contrato',
		'id_cliente',
		'inicio_contrato',
		'fin_contrato',
		'id_tipo_pago',
		'monto_alquiler',
		'cuota_pago',
		'fecha_corte_pago',
),
)); ?>
