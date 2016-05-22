<?php
$this->breadcrumbs=array(
	'Plantilla Contratos'=>array('index'),
	$model->id_plantilla_contrato,
);

$this->menu=array(
array('label'=>'List PlantillaContrato','url'=>array('index')),
array('label'=>'Create PlantillaContrato','url'=>array('create')),
array('label'=>'Update PlantillaContrato','url'=>array('update','id'=>$model->id_plantilla_contrato)),
array('label'=>'Delete PlantillaContrato','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_plantilla_contrato),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PlantillaContrato','url'=>array('admin')),
);
?>

<h1>View PlantillaContrato #<?php echo $model->id_plantilla_contrato; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'descripcion',
		'id_plantilla_contrato',
),
)); ?>
