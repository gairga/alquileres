<?php
$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Contrato','url'=>array('index')),
array('label'=>'Create Contrato','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('contrato-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Contratos</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'contrato-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_contrato',
		'id_cliente',
		'inicio_contrato',
		'fin_contrato',
		'id_tipo_pago',
		'monto_alquiler',
		/*
		'cuota_pago',
		'fecha_corte_pago',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
