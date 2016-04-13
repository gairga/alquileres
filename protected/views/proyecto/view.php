<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->id_proyecto,
);

$this->menu=array(
array('label'=>'List Proyecto','url'=>array('index')),
array('label'=>'Create Proyecto','url'=>array('create')),
array('label'=>'Update Proyecto','url'=>array('update','id'=>$model->id_proyecto)),
array('label'=>'Delete Proyecto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proyecto),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Proyecto','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">PROYECTO #<?php echo $model->id_proyecto; ?></button>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_proyecto',
		'nom_proyecto',
		'cod_proyecto',
),
)); ?>
