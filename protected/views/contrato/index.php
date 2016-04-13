<?php
$this->breadcrumbs=array(
	'Contratos',
);

$this->menu=array(
array('label'=>'Create Contrato','url'=>array('create')),
array('label'=>'Manage Contrato','url'=>array('admin')),
);
?>

<h1>Contratos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
