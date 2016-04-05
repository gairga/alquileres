<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_edificio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_edificio),array('view','id'=>$data->id_edificio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_edificio')); ?>:</b>
	<?php echo CHtml::encode($data->nom_edificio); ?>
	<br />


</div>