<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_apartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_apartamento),array('view','id'=>$data->id_apartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_edificio')); ?>:</b>
	<?php echo CHtml::encode($data->id_edificio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_apartamento')); ?>:</b>
	<?php echo CHtml::encode($data->nom_apartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>