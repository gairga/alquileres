<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente),array('view','id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->nom_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ape_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->ape_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->num_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />


</div>