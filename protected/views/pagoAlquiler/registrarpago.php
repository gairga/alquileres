<?php 
$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
  'id'=>'apartamento-form',
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
        Cuota de Pago: <?php echo "";?> <br/>
        Feha de Corte de Pago: <?php echo "";?> <br/>

      </div>
    </div>

    <br/>
 <div class="panel panel-danger class">
 
   <div class="panel-heading">INFORMACIÓN GENERAL</div>
      <div class="panel-body">
  
  

  
    <div class="form-group">
    <?php echo $form->textFieldGroup($model,'fecha_pago',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">N° de Recibo</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="1126">
      </div>

   <div class="form-group">
    <label for="exampleInputName2">Pago Correspondiente al Corte</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="2">
  </div>
  <div class="form-group">
  
   <?php echo $form->textFieldGroup($model,'monto_pagado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
      </div>

       <div class="form-group">
    <label for="exampleInputEmail2">Monto </label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="450">
      </div>


       <div class="form-group">
    <label for="exampleInputEmail2">Concepto</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Pago Cuota">
      </div>

       <div class="form-group">
    <label for="exampleInputEmail2">Recargo</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="SI / NO">
      </div>


       <div class="form-group">
    <label for="exampleInputEmail2">Concepto</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="---">
      </div>

             <div class="form-group">
    <label for="exampleInputEmail2">Observaciones</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="--">
      </div>

 </div>
  </div>

  <?php $this->endWidget(); ?>