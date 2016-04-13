<?php
$this->breadcrumbs=array(
	'Edificios'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Edificio','url'=>array('index')),
array('label'=>'Admiistrar Edificio','url'=>array('admin')),
);
?>
<br/>
<button type="button" class="btn btn-warning">CREAR TORRE</button>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>