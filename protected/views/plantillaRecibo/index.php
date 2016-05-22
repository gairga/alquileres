<?php
$this->breadcrumbs=array(
	'Plantilla Recibos',
);

$this->menu=array(
array('label'=>'Create PlantillaRecibo','url'=>array('create')),
array('label'=>'Manage PlantillaRecibo','url'=>array('admin')),
);
?>

<h1>Plantilla Recibos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
