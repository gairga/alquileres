<?php
$this->breadcrumbs=array(
	'Pago Alquilers',
);

$this->menu=array(
array('label'=>'Create PagoAlquiler','url'=>array('create')),
array('label'=>'Manage PagoAlquiler','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">LISTA DE ALQUILERES</button>


<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
