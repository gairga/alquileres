<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pago_alquiler')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pago_alquiler),array('view','id'=>$data->id_pago_alquiler)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->id_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_corte_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_corte_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuota_pago')); ?>:</b>
	<?php echo CHtml::encode($data->cuota_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuota_mensual')); ?>:</b>
	<?php echo CHtml::encode($data->cuota_mensual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_pagado')); ?>:</b>
	<?php echo CHtml::encode($data->monto_pagado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo_pendiente')); ?>:</b>
	<?php echo CHtml::encode($data->saldo_pendiente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ultimo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ultimo_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_alquiler')); ?>:</b>
	<?php echo CHtml::encode($data->monto_alquiler); ?>
	<br />

	*/ ?>

</div>