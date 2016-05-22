<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_plantilla_recibo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_plantilla_recibo),array('view','id'=>$data->id_plantilla_recibo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>