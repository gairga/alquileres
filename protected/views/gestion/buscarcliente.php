<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Listar Cliente','url'=>array('index')),
array('label'=>'Crear Cliente','url'=>array('create')),
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
'dataProvider'=>$contrato->search(),
'filter'=>$contrato,
'columns'=>array(
		'idCliente.id_cliente',
		'idCliente.nom_cliente',
		'idCliente.ape_cliente',
		'idCliente.num_identificacion',
		'idCliente.correo',
        'id_contrato',

     array(
            'class'=>'CButtonColumn',
            'template'=>'{gestion}',
            'buttons'=>array
        (
        'gestion' => array
        (
            'label'=>'Iniciar Gestión',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/dolar.png',
            'url'=>'Yii::app()->createUrl("gestion/create", array("id"=>$data->id_cliente))',
        ),
     ),
        ),
),
)); ?>
