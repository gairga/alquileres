<?php
$this->breadcrumbs=array(
	'Plantilla Contratos',
);

$this->menu=array(
array('label'=>'Create PlantillaContrato','url'=>array('create')),
array('label'=>'Manage PlantillaContrato','url'=>array('admin')),
);
?>

<h1>Plantilla Contratos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
