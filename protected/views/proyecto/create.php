<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Proyecto','url'=>array('index')),
array('label'=>'Administrar Proyecto','url'=>array('admin')),
);
?>

<br/>
<button type="button" class="btn btn-warning">CREAR PROYECTO</button>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>