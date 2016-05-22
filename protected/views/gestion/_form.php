<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'gestion-form',
	'enableAjaxValidation'=>false,
)); ?>
<script>
$(function(){
    $('select#Gestion_llamada_voz').prop('disabled', true);
    $('select#Gestion_contactado_llamada').change(function () {
        
        //alert("Entre a la funcion");
        
       // document.getElementById('Gestion_contactado_llamada').value;
        $valor=(document.getElementById('Gestion_contactado_llamada').value);
      //alert($valor);
        if($valor==2){
    $('select#Gestion_llamada_voz').attr("disabled", false);
            //$('select#Gestion_llamada_voz').prop('disabled', false);
        }else{
    $('select#Gestion_llamada_voz').attr("disabled", true);
           // $('select#Gestion_llamada_voz').prop('disabled', true); 
        
        }
        
    });
    
        
    $('select#Gestion_id_gestion_llamadas').click(function () {
       
       
       document.getElementById('Gestion_id_gestion_llamadas').value;
        $valor=(document.getElementById('Gestion_id_gestion_llamadas').value);
    // alert( $valor);
           if($valor==1){
                document.getElementById('treinta').style.display='block';
           }else{
                document.getElementById('treinta').style.display='none';
           }
           
           if($valor==2){
                document.getElementById('sesenta').style.display='block';
           }else{
                document.getElementById('sesenta').style.display='none';
           }
           
           if($valor==3){
                document.getElementById('noventa').style.display='block';
           }else{
                document.getElementById('noventa').style.display='none';
           }
           
           if($valor==5){
                document.getElementById('cientoveinte').style.display='block';
           }else{
                document.getElementById('cientoveinte').style.display='none';
           }
});

});
</script>    
 <?php  $id=$cliente->id_cliente; ?>

   <?php  $model->id_cliente=$id; ?>

<p class="help-block">Los campos con <span class="required">*</span> son obligatorios</p>

<?php echo $form->errorSummary($model); ?>
cliente
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


    <div class="panel panel-primary">
      <div class="panel-heading">ULTIMAS GESTIONES</div>
      <div class="panel-body">
        N° de Apartamento/Local:1126<br/>
        Nombre del Cliente:<br/>
        Apellido del Cliente: <br/>
        N° de Identificación:  <br/>  

      </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
          <b><?php echo $form->labelEx($model, 'Contactado');?></b><br />
      
          <?php
                
                 $this->widget(
                'booster.widgets.TbSelect2',
                    array(
                        'model'=>$model,
                        'attribute'=>'contactado_llamada',                           
                            'data'=>array(
                              1=>'Si',
                              2=>'No',
                        ),
                        'htmlOptions' => array(
                              'placeholder' => "----",                            
                        ),
                    )
                ); 
         
         ?>
        </div>

        <div class="col-xs-6">

        <b><?php echo $form->labelEx($model, 'Mensaje de voz');?></b>
            <br />
          <?php
               $this->widget(
                'booster.widgets.TbSelect2',
                     array(
                        'model'=>$model,
                        'attribute'=>'llamada_voz',
                        'data'=>array(
                          1=>'Si',
                          2=>'No',
                        ),
                        'htmlOptions' => array(
                        'placeholder' => "----",
                    ),
                  ) 
               ); 
         ?>
        </div>
    </div>

  <div class="row">
      <div class="col-xs-6">
        <?php echo $form->textFieldGroup($model,'id_acuerdo_cobros',
               array('widgetOptions'=>array(
                    'htmlOptions'=>array(
                              'class'=>'span5')))); ?>
      </div>
      <div class="col-xs-6">   
        <?php echo $form->datePickerGroup($model,'fecha_acuerdo',array(
                      'widgetOptions'=>array(
                      'options'=>array(
                                   'format' => 'yyyy-mm-dd'
                      ),
                      'htmlOptions'=>array('class'=>'span5')), 
                       'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click para seleccionar un Mes/Año.')); ?>
      </div>

        <?php echo $form->textAreaGroup(
      $model,
      'observaciones',
      array(
        'wrapperHtmlOptions' => array(
          'class' => 'col-sm-5',
        ),
        'widgetOptions' => array(
          'htmlOptions' => array('rows' => 5),
        )
      )
    ); ?>

  <?php echo $form->datePickerGroup($model,'fecha_creacion',array(
                    'widgetOptions'=>array(
                    'options'=>array(
                                 'format' => 'yyyy-mm-dd'
                    ),
                    'htmlOptions'=>array('class'=>'span5')), 
                     'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click para seleccionar un Mes/Año.')); ?>
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Guardar' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
