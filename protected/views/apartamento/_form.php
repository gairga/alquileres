<?php 
$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'apartamento-form',
	'enableAjaxValidation'=>false,
)); ?>

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

         $('select#Apartamento_id_cliente').change(function () { 

      //  $('select#Apartamento_id_cliente').blur(function() {
         //   var id_cliente=(document.getElementById('Apartamento_id_cliente').value);
 //alert("ff");
          var x = $('#Apartamento_id_cliente').val();
                   alert(x);
         
            //   alert(x);
              $.ajax({
                          url: "<?php echo Yii::app()->createUrl('cliente/existecliente')?>",
                          data: {"id_cliente":x},
                          success: function(data){
                                  $("#nombre").val(data);
                         }
              });
         });
    
    
});
</script>

<?php echo $form->errorSummary($model); ?>

<!-- INICIO COMBOS DEPENDIENTES -->
<div class="row">
        <?php echo $form->labelEx($model,'Edificio'); ?>
        <?php 
              $departamento = new CDbCriteria; 
              $departamento->order = 'nom_edificio ASC';
        ?>
        <?php 
              echo $form->dropDownList($model,'id_edificio',CHtml::listData(Edificio::model()->findAll($departamento),'id_edificio','nom_edificio'),
                        array(
                            'ajax' => array(
                            'type' => 'POST',
                            'url' => CController::createUrl('apartamento/SelectEdificio'),
                            'update' => '#CombosDependientes_codMunicipio'
                        ),'prompt' => 'Seleccione un Edificio...'
                  )
              );
        ?>
        <?php echo $form->error($model,'codDepartamento'); ?>
    </div>
 
    <div class="row">
        <?php echo $form->labelEx($model,'Edificio'); ?>
        <?php 
              $municipio = new CDbCriteria;
              $municipio->order = 'nom_edificio ASC';
        ?>
        <?php 
              echo $form->dropDownList($model,'id_edificio',CHtml::listData(Edificio::model()->findAll($municipio),'id_edificio','nom_edificio'),
                        array(
                            'ajax' => array(
                            'type' => 'POST',
                            'url' => CController::createUrl('CombosDependientes/dynamicCorregimientos'),
                            'update' => '#CombosDependientes_codCorregimiento'
                        ),'prompt' => 'Seleccione un Edificio...'
                    )
              );
        ?>
        <?php echo $form->error($model,'codMunicipio'); ?>
    </div>
 
 
    <div class="row">
 
        <?php echo $form->labelEx($model,'Apartamento'); ?>
        <?php echo $form->dropDownList($model,'id_edificio',array('Seleccione un Apartamento...'));?>
        <?php echo $form->error($model,'id_edificio'); ?>
    </div>
<!-- FIN COMBOS DEPENDIENTES -->

	<?php echo $form->textFieldGroup($model,'nom_apartamento',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php //echo $form->textFieldGroup($model,'id_cliente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'activo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>


 
<button type="button" class="btn btn-warning">DATOS PROYECTO</button>

  <div class="form-group">
      <label for="exampleInputName2">Proyecto</label>
      <input type="text" name="prueyba" class="form-control" id="pryueba" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail2">Dirección</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Panama">
  </div>
 
  <button type="button" class="btn btn-warning">DATOS APARTAMENTO</button>

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
<div class="alert alert-info" role="alert">
  <a href="#" class="alert-link">Busque el Nombre del Cliente para obtener sus datos</a>
</div>
  <div class="form-group">

  
  <div>
        <?php
                    $this->widget(
                      'booster.widgets.TbSelect2', array(
                      'model' => $model,
                      'attribute' => 'id_cliente',
                      'asDropDownList' => true,
                      'data' => CHtml::listData(Cliente::model()->findAll(), 'id_cliente', 'nom_cliente'),
                      'options' => array(
                      'placeholder' => "NOMBRE DEL INQUILINO",
                        'allowClear'=>true,
                        'minimumInputLength'=>2,
                      ),
                      'htmlOptions'=>array(
                        'style'=>'width:90px',
                      ),
                    ));
        ?>
  </div> 
<br/><br/>
  <div class="col-xs-4">
      <label for="ex1">Nombre Cliente</label>
      <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Nombre Cliente">
  </div>
  <div class="col-xs-4">
      <label for="ex2">Apellido </label>
      <input class="form-control" id="ex2" type="text" placeholder="Apellido Cliente">
  </div>
  <div class="col-xs-5">
      <label for="ex3">Cedula</label>
      <input class="form-control" id="ex3" type="text" placeholder="XXXX">
  </div>
 </div>




<?php $this->endWidget(); ?>