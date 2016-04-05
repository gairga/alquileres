<?php
$this->breadcrumbs=array(
	'Edificios',
);

$this->menu=array(
array('label'=>'Create Edificio','url'=>array('create')),
array('label'=>'Manage Edificio','url'=>array('admin')),
);
?>

<h1>Edificios</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
