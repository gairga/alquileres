<?php
$this->breadcrumbs=array(
	'Pago Alquilers',
);

$this->menu=array(
array('label'=>'Create PagoAlquiler','url'=>array('create')),
array('label'=>'Manage PagoAlquiler','url'=>array('admin')),
);
?>

<h1>Pago Alquilers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
