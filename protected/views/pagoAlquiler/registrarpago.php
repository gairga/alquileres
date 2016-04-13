<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
  'id'=>'pago-alquiler-form',
  'enableAjaxValidation'=>false,
)); 

 $this->menu=array(
  array('label'=>'List PagoAlquiler','url'=>array('index')),
  array('label'=>'Manage PagoAlquiler','url'=>array('admin')),
 ); 
 $nombre=null;
?>
<style type="text/css">
.form-inline .form-group > div.col-xs-8 {
    padding-left: 0;
    padding-right: 0;
}
// vertical align label
.form-inline label {
    line-height: 34px;
}

.form-inline .form-control {
    width: 100%;
}

@media (min-width: 768px) {
  .form-inline .form-group {
    margin-bottom: 15px;
  }
}
</style> 
<?php echo $form->errorSummary($model); ?>
 <div class="panel panel-primary">
      <div class="panel-heading">INFORMACIÓN GENERAL</div>
      <div class="panel-body">
        N° de Apartamento/Local:1126<br/>
        Nombre del Cliente: <?php echo $cliente->nom_cliente;?><br/>
        Apellido del Cliente: <?php echo $cliente->ape_cliente;?><br/>
        N° de Identificación: <?php echo $cliente->num_identificacion;?> <br/>  
        Inicio de Contrato: <?php echo $contrato->inicio_contrato;?> <br/>
        N° de Contrato: <?php echo $contrato->id_contrato; ?> <br/>
        Cuota de Pago: <?php echo $contrato->cuota_pago; ?> <br/>
        Feha de Corte de Pago:  <?php echo $contrato->fecha_corte_pago; ?> <br/>

      </div>
    </div>

    <br/>
 <div class="panel panel-danger class">
  <div class="panel-heading">INFORMACIÓN GENERAL</div>
    <div class="panel-body">
      
      <div class="form-group">
          <?php echo $form->datePickerGroup($model,'fecha_pago',array('widgetOptions'=>array('options'=>array(
                                 'format' => 'yyyy-mm-dd'
                    ),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Seleccione un mes y un año')); ?>
      </div>
     
      <div class="form-group">
      <?php echo $form->textFieldGroup($model,'num_recibo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
      </div>

      <div class="form-group">
       <?php echo $form->labelEx($model,'id_meses'); ?>
    <?php echo $form->dropDownList($model, 'id_meses', CHtml::listData(Meses::model()->findAll(array('order'=>'id_meses')), 'id_meses','descripcion'),
          array(
  'class'=>'form-control',
          'empty'=>'Seleccionar..')); ?>

    <?php echo $form->error($model,'id_meses'); ?>
      </div>

      <div class="form-group">
       <?php echo $form->textFieldGroup($model,'monto_pagado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
      </div>
      

      <div class="form-group">
      <?php echo $form->textFieldGroup($model,'monto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
      </div>

      <div class="form-group">
      <?php echo $form->textFieldGroup($model,'concepto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
      </div>

      <div class="form-group">
      <?php echo $form->textFieldGroup($model,'observacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
     </div>

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
