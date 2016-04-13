<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('nom_edificio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nom_edificio),array('view','id'=>$data->id_edificio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant')); ?>:</b>
	<?php echo CHtml::encode($data->cant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProyecto['nom_proyecto'])); ?>
	<br />
</div>