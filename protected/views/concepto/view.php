<?php
$this->breadcrumbs=array(
	'Conceptos'=>array('index'),
	$model->id_concepto,
);

$this->menu=array(
array('label'=>'List Concepto','url'=>array('index')),
array('label'=>'Create Concepto','url'=>array('create')),
array('label'=>'Update Concepto','url'=>array('update','id'=>$model->id_concepto)),
array('label'=>'Delete Concepto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_concepto),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Concepto','url'=>array('admin')),
);
?>

<h1>View Concepto #<?php echo $model->id_concepto; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_concepto',
		'descripcion',
),
)); ?>
