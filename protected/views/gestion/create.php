<?php
$this->breadcrumbs=array(
	'Gestion'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Gestion','url'=>array('index')),
array('label'=>'Administrar Gestion','url'=>array('admin')),
);
?>

<button type="button" class="btn btn-warning">CREAR GESTION</button>


<?php echo $this->renderPartial('_form', 
           array('model'=>$model,
                 'cliente'=>$cliente,
                 'contrato'=>$contrato)); ?>