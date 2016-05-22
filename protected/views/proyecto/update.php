<?php
$this->breadcrumbs=array(
	'Proyecto'=>array('index'),
	//$model->id_proyecto=>array('view','id'=>$model->id_proyecto),
	'Actualizar Proyecto',
);

	$this->menu=array(
	array('label'=>'Listar Proyecto','url'=>array('index')),
	array('label'=>'Crear Proyecto','url'=>array('create')),
	array('label'=>'Ver Proyecto','url'=>array('view','id'=>$model->id_proyecto)),
	array('label'=>'Actualizar Proyecto','url'=>array('admin')),
	);
	?>

<button type="button" class="btn btn-warning">ACTUALIZAR PROYECTOS <?php echo $model->id_proyecto; ?></button>


<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>