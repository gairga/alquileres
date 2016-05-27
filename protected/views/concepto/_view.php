<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_concepto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_concepto),array('view','id'=>$data->id_concepto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>