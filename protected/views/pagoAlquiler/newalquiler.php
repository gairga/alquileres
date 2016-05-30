<?php 
$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'apartamento-form',
	'enableAjaxValidation'=>false,
));

 $this->menu=array(
  array('label'=>'Listar Alquileres','url'=>array('index')),
  array('label'=>'Administrar Alquileres','url'=>array('admin')),
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

         $('select#PagoAlquiler_id_cliente').change(function () { 
          var x = $('#PagoAlquiler_id_cliente').val();
                   //alert(x);
              $.ajax({
                          url: "<?php echo Yii::app()->createUrl('cliente/existecliente')?>",
                          data: {"id_cliente":x},
                          success: function(data){       
                            // var json_x = data;
                      //       var name = data.Cliente[1].nom_cliente;
                 //     var name = json_x.Cliente[1];
    //alert(data);
    /*$('#result').html(json_x['firstName2']);
    $('#result2').html(json_x['b']); */
                                 // $("#nom_cliente").val(data['nom_cliente']);
                                    // ["nom_cliente"]=>      string(4) "Gaby"
                                 // $("#apellido").val(data);

                                 for (var i=0;i<data.length;++i)
         {
         $('#nom_cliente').append('<div class="name">data[i].name</>');
         }
                         }
              });
         });
       
});
</script>

<?php echo $form->errorSummary($model); ?>

<!-- INICIO COMBOS DEPENDIENTES -->

<button type="button" class="btn btn-warning">DATOS PROYECTO</button>
<br/>
<div class="row">
    <?php echo $form->labelEx($model,'id_proyecto'); ?>
    <?php echo $form->dropDownList($model,'id_proyecto',
                   CHtml::listData(Proyecto::model()->findAll(),'id_proyecto','nom_proyecto'),
                        array(
                          'class'=>'form-control',
                            'ajax'=>array(
                              'type'=>'GET',
                              'url'=>CController::createUrl('PagoAlquiler/Selectdos'),
                              'update'=>'#'.CHtml::activeId($model,'id_edificio'),
                              'beforeSend' => 'function(){
                               $("#PagoAlquiler_id_edificio").find("option").remove();
                               $("#PagoAlquiler_id_apartamento").find("option").remove();
                               }',  
                            ),'prompt'=>'Seleccione'
                            
                            
                        )
                        //array()
                        ); ?>
    <?php echo $form->error($model,'id_proyecto'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_edificio'); ?>
    <?php 
                $lista_dos = array();
                if(isset($model->id_edificio)){
                $id_uno = intval($model->id_proyecto); 
                $lista_dos = CHtml::listData(Edificio::model()->findAll("id_proyecto = '$id_uno'"),'id_edificio','nom_edificio');
                }                
                echo $form->dropDownList($model,'id_edificio',$lista_dos,
                        array(
                            'class'=>'form-control',
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('PagoAlquiler/Selecttres'),
                              'update'=>'#'.CHtml::activeId($model,'id_apartamento'),
                              'beforeSend' => 'function(){
                              $("#PagoAlquiler_id_apartamento").find("option").remove();
                               }',   
                                
                            ),
                            
                            'prompt'=>'Seleccione')
                        ); ?>
            
            
            
            
            
    <?php echo $form->error($model,'id_edificio'); ?>
  </div>
        
        
        
        

  <div class="row">
    <?php echo $form->labelEx($model,'id_apartamento'); ?>
    <?php 
                $lista_tres = array();
                if(isset($model->id_nivel_tres)){
                $id_dos = intval($model->id_nivel_dos); 
                $lista_tres = CHtml::listData(Apartamento::model()->findAll("id_edificio = '$id_dos'"),'id_apartamento','nom_apartamento');
                }
                echo $form->dropDownList($model,'id_apartamento',$lista_tres,
                        array(
                          'class'=>'form-control',
                          'prompt'=>'Seleccione')
                        ); ?>
    <?php echo $form->error($model,'id_apartamento'); ?>
  </div>

<!-- FIN COMBOS DEPENDIENTES -->
<br/>
<button type="button" class="btn btn-warning">ACTIVO</button>
  <div class="row">
  <div class="col-xs-3">
  
    <?php
        $this->widget(
        'booster.widgets.TbSwitch',
        array(
            'name' => 'testToggleButton1',
            'options' => array(
                'size' => 'small', //null, 'mini', 'small', 'normal', 'large
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
                         'width' => '40%',
                      ),
                     /* 'htmlOptions'=>array(
                        'style'=>'height:10px',
                      ),*/
                    ));
        ?>
  </div> 
   </div> 
<br/><br/>



<button type="button" class="btn btn-warning">DATOS CONTRATO</button>

  <?php echo $form->datePickerGroup($contrato,'inicio_contrato',array('widgetOptions'=>array('options'=>array(
                                 'format' => 'yyyy-mm-dd'
                    ),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click para seleccionar un Mes/Año.')); ?>

  <?php echo $form->datePickerGroup($contrato,'fin_contrato',array(
                    'widgetOptions'=>array(
                    'options'=>array(
                                 'format' => 'yyyy-mm-dd'
                    ),
                    'htmlOptions'=>array('class'=>'span5')), 
                     'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click para seleccionar un Mes/Año.')); ?>

    
       <?php //echo $form->labelEx($contrato,'id_tipo_pago'); ?>
    <?php //echo $form->dropDownList($contrato, 'id_tipo_pago', CHtml::listData(TipoPago::model()->findAll(array('order'=>'nom_tipo_pago')), 'id_tipo_pago','nom_tipo_pago'),
       /*   array(
  'class'=>'form-control',
          'empty'=>'Seleccionar..')); */?>

    <?php //echo $form->error($contrato,'id_tipo_pago'); ?>
<?php $contrato->fecha_corte_pago=15; ?>
  <?php echo $form->textFieldGroup($contrato,'cuota_pago',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

  <?php //echo $form->textFieldGroup($contrato,'fecha_corte_pago',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
   <?php echo $form->datePickerGroup($contrato,'fecha_corte_pago',array('widgetOptions'=>array('options'=>array(
                                 'format' => 'dd'
                    ),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click para seleccionar un Mes/Año.')); ?>

    <?php /*echo $form->textFieldGroup($contrato,'cuota_pago',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5'))));*/ ?>
    
<div class="form-actions">
  <?php $this->widget('booster.widgets.TbButton', array(
      'buttonType'=>'submit',
      'context'=>'primary',
      'label'=>$model->isNewRecord ? 'Guardar' : 'Save',
    )); ?>
</div>


<?php $this->endWidget(); ?>