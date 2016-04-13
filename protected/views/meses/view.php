<?php
$this->breadcrumbs=array(
	'Meses'=>array('index'),
	$model->id_meses,
);

$this->menu=array(
array('label'=>'List Meses','url'=>array('index')),
array('label'=>'Create Meses','url'=>array('create')),
array('label'=>'Update Meses','url'=>array('update','id'=>$model->id_meses)),
array('label'=>'Delete Meses','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_meses),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Meses','url'=>array('admin')),
);
?>

<h1>View Meses #<?php echo $model->id_meses; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_meses',
		'descripcion',
),
)); ?>
