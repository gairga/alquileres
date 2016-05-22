<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
  'id'=>'pago-alquiler-form',
  'enableAjaxValidation'=>false,
)); 

 $this->menu=array(
  array('label'=>'Listar Pagos de Alquiler','url'=>array('index')),
  array('label'=>'Detalle de Pagos','url'=>array('detallesdepago')),
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
<script>

$(function(){
         $("#efectivo").css("display", "none");
         $("#debito").css("display", "none");
         $("#credito").css("display", "none");
         // $("#PagoAlquiler").css("display", "block");
         $('select#PagoAlquiler_id_tipo_pago').change(function () { 
          var x = $('#PagoAlquiler_id_tipo_pago').val();
              alert(x);
              if(x==1){
                $("#efectivo").css("display", "none");
                $("#debito").css("display", "none");
                $("#credito").css("display", "none");
              }
              if(x==2){
                $("#efectivo").css("display", "none");
                $("#debito").css("display", "none");
                $("#credito").css("display", "none");
              }
              if(x==3){
                $("#efectivo").css("display", "none");
                $("#debito").css("display", "none");
                $("#credito").css("display", "none");
              }              
              if(x==5){
                $("#efectivo").css("display", "block");
                $("#debito").css("display", "block");
                $("#credito").css("display", "none");
              }
              if(x==6){
                $("#efectivo").css("display", "block");
                $("#credito").css("display", "block");
                $("#debito").css("display", "none");
              }
              if(x==7){
                $("#efectivo").css("display", "block");
                $("#debito").css("display", "block");
                $("#credito").css("display", "block");
              }
         });
       
});
</script>

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
           <div class='panel panel-primary'>
            <div class='panel-heading'>DATOS DE LOS ULTIMOS PAGOS</div>
            <div class='panel-body'>
               <table border='1'>
                <tr>               
                 <th>Mes</th>
                 <th>Monto Pagado</th>
                 <th>Saldo Penditente</th>
                </tr> 
    <?php foreach ($pagoscliente as $row) {
              echo $message = "<tr>
                    <td>".$row['id_meses']."</td>                
                    <td>".$row['monto_pagado']."</td>
                   <td>".$row['saldo_pendiente']."</td>      
                  </tr>                            
           ";
        }

        ?>  
         </table> 
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
       <?php echo $form->labelEx($model,'id_tipo_pago'); ?>
    <?php echo $form->dropDownList($model, 'id_tipo_pago', CHtml::listData(TipoPago::model()->findAll(array('order'=>'id_tipo_pago')), 'id_tipo_pago','nom_tipo_pago'),
          array(
  'class'=>'form-control',
          'empty'=>'Seleccionar..')); ?>

    <?php echo $form->error($model,'id_meses'); ?>
      </div>

      <div id="efectivo">
            <div class="form-group">
             <?php echo $form->textFieldGroup($model,'pago1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
            </div>
      </div>

      <div id="debito">
        <div class="form-group">
         <?php echo $form->textFieldGroup($model,'pago2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
         </div>
      </div>
      
      <div id="credito">
        <div class="form-group">
         <?php echo $form->textFieldGroup($model,'pago3',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        </div>
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
      'label'=>$model->isNewRecord ? 'Guardar' : 'Save',
    )); ?>
</div>

<?php $this->endWidget(); ?>
