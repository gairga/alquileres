<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contrato),array('view','id'=>$data->id_contrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->fin_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_alquiler')); ?>:</b>
	<?php echo CHtml::encode($data->monto_alquiler); ?>
	<br />


</div>