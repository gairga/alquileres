<?php
$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Edificio','url'=>array('index')),
array('label'=>'Manage Edificio','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">Crear Edificio</button>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>