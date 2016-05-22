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

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_de_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_de_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telef_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->telef_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencia_personal')); ?>:</b>
	<?php echo CHtml::encode($data->referencia_personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telef_referencia')); ?>:</b>
	<?php echo CHtml::encode($data->telef_referencia); ?>
	<br />

	*/ ?>

</div>