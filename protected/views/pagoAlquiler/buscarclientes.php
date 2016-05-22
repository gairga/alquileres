<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Cliente','url'=>array('index')),
array('label'=>'Create Cliente','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('cliente-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<button type="button" class="btn btn-warning">BUSCAR CLIENTE</button>



<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'cliente-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'idCliente.id_cliente',
		'idCliente.nom_cliente',
		'idCliente.ape_cliente',
		'idCliente.num_identificacion',
		'idCliente.correo',
        'id_contrato',

     array(
            'class'=>'CButtonColumn',
            'template'=>'{pago}{update}',
            'buttons'=>array
        (
        'pago' => array
        (
            'label'=>'Ver Cliente',
            'imageUrl'=>Yii::app()->request->baseUrl.'/images/dolar.png',
            'url'=>'Yii::app()->createUrl("pagoAlquiler/registrarpago", array("id"=>$data->id_cliente))',
        ),
                'update' => array
        (
            'label'=>'Actualizar Gestión',
            'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
            'url'=>'Yii::app()->createUrl("pagoAlquiler/registrarpago", array("id"=>$data->id_cliente))',
        ),
     ),
        ),
),
)); ?>
