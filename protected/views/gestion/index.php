<?php
$this->breadcrumbs=array(
	'Gestions',
);

$this->menu=array(
array('label'=>'Create Gestion','url'=>array('create')),
array('label'=>'Manage Gestion','url'=>array('admin')),
);
?>

<h1>Gestions</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
