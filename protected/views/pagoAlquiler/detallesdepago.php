<?php
$this->breadcrumbs=array(
	'Pago Alquilers'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List PagoAlquiler','url'=>array('index')),
array('label'=>'Create PagoAlquiler','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pago-alquiler-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<button type="button" class="btn btn-warning">DETALLES DE PAGOS</button>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'pago-alquiler-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'idContrato.fecha_corte_pago',
		'idCliente.nom_cliente',
		'fecha_pago',
		'num_recibo',
		'monto_pagado',
		'saldo_pendiente',
		'concepto',
		'observacion',

array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
