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



<button type="button" class="btn btn-warning">ADMINISTRAR CLIENTE</button>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'cliente-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_cliente',
		'nom_cliente',
		'ape_cliente',
		'num_identificacion',
		'correo',
		'direccion',
		/*
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
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
