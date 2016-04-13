<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'edificio-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con<span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

  <?php
            $this->widget(
              'booster.widgets.TbSelect2', array(
              'model' => $model,
              'attribute' => 'id_proyecto',
              'data' => CHtml::listData(Proyecto::model()->findAll(), 'id_proyecto', 'nom_proyecto'),
              'options' => array(
              'placeholder' => "Proyecto",
               /* 'allowClear'=>true,
                'minimumInputLength'=>2,*/
              ),
              'htmlOptions'=>array(
                'style'=>'width:380px',
              ),
            ));
  ?>

	<?php echo $form->textFieldGroup($model,'nom_edificio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>



	<?php echo $form->textFieldGroup($model,'cant',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
