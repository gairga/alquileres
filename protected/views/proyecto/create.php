<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Proyecto','url'=>array('index')),
array('label'=>'Manage Proyecto','url'=>array('admin')),
);
?>


<button type="button" class="btn btn-warning">Create Proyecto</button>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>