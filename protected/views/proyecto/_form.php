<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'proyecto-form',
	'enableAjaxValidation'=>false,
)); ?>
<br/>
<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nom_proyecto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'cod_proyecto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Guardar' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
