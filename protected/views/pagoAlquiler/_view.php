<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pago_alquiler')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pago_alquiler),array('view','id'=>$data->id_pago_alquiler)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->id_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_pagado')); ?>:</b>
	<?php echo CHtml::encode($data->monto_pagado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo_pendiente')); ?>:</b>
	<?php echo CHtml::encode($data->saldo_pendiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ultimo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ultimo_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_alquiler')); ?>:</b>
	<?php echo CHtml::encode($data->monto_alquiler); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->id_proyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_edificio')); ?>:</b>
	<?php echo CHtml::encode($data->id_edificio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_apartamento')); ?>:</b>
	<?php echo CHtml::encode($data->id_apartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_recibo')); ?>:</b>
	<?php echo CHtml::encode($data->num_recibo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('concepto')); ?>:</b>
	<?php echo CHtml::encode($data->concepto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_meses')); ?>:</b>
	<?php echo CHtml::encode($data->id_meses); ?>
	<br />

	*/ ?>

</div>