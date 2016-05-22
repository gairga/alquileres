<?php
$this->breadcrumbs=array(
	'Proyectos',
);

$this->menu=array(
array('label'=>'Create Proyecto','url'=>array('create')),
array('label'=>'Manage Proyecto','url'=>array('admin')),
);
?>
<button type="button" class="btn btn-warning">PROYECTOS</button>


<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
