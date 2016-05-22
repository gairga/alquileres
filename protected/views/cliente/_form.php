<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>
 <div class="panel panel-primary">
      <div class="panel-heading">INFORMACIÓN GENERAL</div>
      <div class="panel-body">
	<?php echo $form->textFieldGroup($model,'nom_cliente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'ape_cliente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'num_identificacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'correo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>


	<?php echo $form->textFieldGroup($model,'celular',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php /*echo $form->textFieldGroup($model,'sexo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); */?>
    <?php echo $form->dropDownListGroup(
			$model,
			'sexo',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('Seleccione...', 'FEMENINO', 'MASCULINO'),
					'htmlOptions' => array(),
				)
			)
		); ?>

	<?php /*echo $form->textFieldGroup($model,'estado_civil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5'))));*/ ?>
	    <?php echo $form->dropDownListGroup(
			$model,
			'estado_civil',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('Seleccione...', 'SOLTERO', 'CASADO','VIUDO','COMPROMETIDO','DIVORCIADO'),
					'htmlOptions' => array(),
				)
			)
		); ?>


	<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>


	<?php /*echo $form->textFieldGroup($model,'pais',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5'))));*/ ?>
    <?php echo $form->dropDownListGroup(
			$model,
			'pais',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('Seleccione...', 'PANAMA', 'COLOMBIA','VENEZUELA'),
					'htmlOptions' => array(),
				)
			)
		); ?>
	<?php echo $form->textFieldGroup($model,'nacionalidad',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
</div>
</div>

 <div class="panel panel-primary">
      <div class="panel-heading">DATOS DEL TRABAJO</div>
      <div class="panel-body">

	<?php echo $form->textFieldGroup($model,'ocupacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>


	<?php echo $form->textFieldGroup($model,'lugar_trabajo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'direccion_de_trabajo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'telef_trabajo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>


	<?php echo $form->textFieldGroup($model,'referencia_personal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'telef_referencia',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
</div>
</div>
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Guardar' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
