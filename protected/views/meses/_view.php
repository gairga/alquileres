<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_meses')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_meses),array('view','id'=>$data->id_meses)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>