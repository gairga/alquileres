<?php
$this->breadcrumbs=array(
	'Conceptos',
);

$this->menu=array(
array('label'=>'Create Concepto','url'=>array('create')),
array('label'=>'Manage Concepto','url'=>array('admin')),
);
?>

<h1>Conceptos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
