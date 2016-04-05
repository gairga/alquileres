<?php /*$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'apartamento-form',
	'enableAjaxValidation'=>false,
)); */?>

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
<script type="text/javascript">


</script>

<?php //echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldGroup($model,'id_edificio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'nom_apartamento',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php //echo $form->textFieldGroup($model,'id_cliente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php //echo $form->textFieldGroup($model,'activo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>


  <form class="form form-inline" role="form">


   <br/><br/>
<button type="button" class="btn btn-warning">DATOS PROYECTO</button>
<br/><br/>
      <div class="form-group">
    <label for="exampleInputName2">Proyecto</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="LOS TONELES">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Dirección</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Panama">
  </div>

   <br/><br/>
<button type="button" class="btn btn-warning">DATOS APARTAMENTO</button>
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
</div>
  <br/><br/>
<button type="button" class="btn btn-warning">DATOS CLIENTE</button>
<br/><br/>
      <div class="form-group">
    <label for="exampleInputName2">Nombre Cliente</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Pedro Perez">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">N° de Identif.</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="2222">
  </div>

<button type="button" class="btn btn-warning">DATOS CONTRATO</button>
<br/><br/>
    <div class="form-group">
    <label for="exampleInputName2">Cuota de Pago</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="2">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Inicio de Contrato</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="2015-12-01">
  </div>

    <div class="form-group">
    <label for="exampleInputName2">Fecha Corte Pago</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="2016-01-31">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">N° Contrato</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="1126">
  </div>
  </form>