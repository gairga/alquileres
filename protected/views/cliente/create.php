<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Cliente','url'=>array('index')),
array('label'=>'Administrar Cliente','url'=>array('admin')),
);
?>

<button type="button" class="btn btn-warning">CREAR CLIENTE</button>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>