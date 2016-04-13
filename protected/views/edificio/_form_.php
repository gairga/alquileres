<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'edificio-form',
	'enableAjaxValidation'=>false,
)); ?>



		<?php echo $form->dropDownListGroup(
			$model,
			'id_proyecto',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('Something ...', 'TOSCANA', ' LOS TONELES'),
					'htmlOptions' => array(),
				)
			)
		); ?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nom_edificio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

<button type="button" class="btn btn-warning">N° de Apartamentos</button>
<br/><br/>

<div class="row">
  <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="A1">
<?php
    $this->widget(
    'booster.widgets.TbSwitch',
    array(
        'name' => 'testToggleButton1',
        'options' => array(
            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        ),
    )
);
?>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="A2">
    <?php
    $this->widget(
    'booster.widgets.TbSwitch',
    array(
        'name' => 'testToggleButton2',
        'options' => array(
            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        ),
    )
);
?>
  </div>
  <div class="col-xs-5">
    <input type="text" class="form-control" placeholder="A3">
    <?php
    $this->widget(
    'booster.widgets.TbSwitch',
    array(
        'name' => 'testToggleButton3',
        'options' => array(
            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        ),
    )
);
?>
  </div>
</div>
<br/><br/>
<button type="button" class="btn btn-warning">N° de Locales</button>
<br/><br/>

<div class="row">
  <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="A1">
    <?php
    $this->widget(
    'booster.widgets.TbSwitch',
    array(
        'name' => 'testToggleButtonA',
        'options' => array(
            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        ),
    )
);
?>
  </div>
  <div class="col-xs-4">
    <input type="text" class="form-control" placeholder="A2">
    <?php
    $this->widget(
    'booster.widgets.TbSwitch',
    array(
        'name' => 'testToggleButtonB',
        'options' => array(
            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        ),
    )
);
?>
  </div>
  <div class="col-xs-5">
    <input type="text" class="form-control" placeholder="A3">
    <?php
    $this->widget(
    'booster.widgets.TbSwitch',
    array(
        'name' => 'testToggleButtonC',
        'options' => array(
            'size' => 'large', //null, 'mini', 'small', 'normal', 'large
            'onColor' => 'success', // 'primary', 'info', 'success', 'warning', 'danger', 'default'
            'offColor' => 'danger',  // 'primary', 'info', 'success', 'warning', 'danger', 'default'
        ),
    )
);
?>
  </div>
</div>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
