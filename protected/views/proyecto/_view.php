<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proyecto),array('view','id'=>$data->id_proyecto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_proyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->cod_proyecto); ?>
	<br />


</div>