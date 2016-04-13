<?php
$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	$model->id_edificio,
);

$this->menu=array(
array('label'=>'List Edificio','url'=>array('index')),
array('label'=>'Create Edificio','url'=>array('create')),
array('label'=>'Update Edificio','url'=>array('update','id'=>$model->id_edificio)),
array('label'=>'Delete Edificio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_edificio),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Edificio','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">TORRE #<?php echo $model->id_edificio; ?></button>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'idProyecto.nom_proyecto',
		'id_edificio',
		'nom_edificio',
),
)); ?>
