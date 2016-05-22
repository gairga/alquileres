<?php
$this->breadcrumbs=array(
	'Plantilla Recibos'=>array('index'),
	$model->id_plantilla_recibo,
);

$this->menu=array(
array('label'=>'List PlantillaRecibo','url'=>array('index')),
array('label'=>'Create PlantillaRecibo','url'=>array('create')),
array('label'=>'Update PlantillaRecibo','url'=>array('update','id'=>$model->id_plantilla_recibo)),
array('label'=>'Delete PlantillaRecibo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_plantilla_recibo),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PlantillaRecibo','url'=>array('admin')),
);
?>

<h1>View PlantillaRecibo #<?php echo $model->id_plantilla_recibo; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'descripcion',
		'id_plantilla_recibo',
),
)); ?>
