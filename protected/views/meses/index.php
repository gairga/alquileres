<?php
$this->breadcrumbs=array(
	'Meses',
);

$this->menu=array(
array('label'=>'Create Meses','url'=>array('create')),
array('label'=>'Manage Meses','url'=>array('admin')),
);
?>

<h1>Meses</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
