<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_plantilla_contrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_plantilla_contrato),array('view','id'=>$data->id_plantilla_contrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>