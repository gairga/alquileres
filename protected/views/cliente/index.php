<?php
$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
array('label'=>'Create Cliente','url'=>array('create')),
array('label'=>'Manage Cliente','url'=>array('admin')),
);
?>


<button type="button" class="btn btn-warning">CLIENTES</button>
<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
