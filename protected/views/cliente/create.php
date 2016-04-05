<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Cliente','url'=>array('index')),
array('label'=>'Manage Cliente','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">Create Cliente</button>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>