<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Listar Proyectos',
);

$this->menu=array(
array('label'=>'List Proyecto','url'=>array('index')),
array('label'=>'Create Proyecto','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('proyecto-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<button type="button" class="btn btn-warning">LISTAR PROYECTOS</button>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'proyecto-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_proyecto',
		'nom_proyecto',
		'cod_proyecto',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
