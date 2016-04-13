<?php
$this->breadcrumbs=array(
	'Meses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Meses','url'=>array('index')),
array('label'=>'Manage Meses','url'=>array('admin')),
);
?>

<h1>Create Meses</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>