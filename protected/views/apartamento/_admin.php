<?php
$this->breadcrumbs=array(
	'Apartamentos'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Listar Apartamento','url'=>array('index')),
array('label'=>'Crear Apartamento','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('apartamento-grid', {
data: $(this).serialize()
});
return false;
});
");
?>



<button type="button" class="btn btn-warning">Asociar Apartamento</button>
<!--<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->
<!--
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div> search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'apartamento-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
	       array(
                    'name'=>'id_proyecto',
                    'header'=>'Proyecto',
                    'value'=> 'CHtml::encode($data->idProyecto["nom_proyecto"])',
                    'filter'=>CHtml::listData(Proyecto::model()->findAll(), 'id_proyecto', 'nom_proyecto'),
                ), 
  	      array(
                    'name'=>'id_edificio',
                    'header'=>'Edificio',
                    'value'=> 'CHtml::encode($data->idEdificio["nom_edificio"])',
                    'filter'=>CHtml::listData(Edificio::model()->findAll(), 'id_edificio', 'nom_edificio'),
                ), 
        array(
                      'class' =>'bootstrap.widgets.TbEditableColumn',
                      'name' => 'nom_apartamento',
                      'editable' => 
                          array(
                              'type' => 'textarea',
                              'model'     => $model,
                              'attribute' => 'nom_apartamento',                           
                              'url' => $this->createUrl('actualizarcampos'),
                               'placement' => 'right',  
                               'emptytext' => 'N° del Apartamento..',                          
                          )
        ),
        array(
              'class' =>'bootstrap.widgets.TbEditableColumn',
              'name' => 'metraje_apartamento',
              'editable' => 
                  array(
                      'type' => 'text',
                      'model'     => $model,
                      'attribute' => 'metraje_apartamento',                           
                      'url' => $this->createUrl('actualizarcampos'),
                       'placement' => 'right',  
                       'emptytext' => 'Metraje..',                          
                  )
        ),
        array(
              'class' =>'bootstrap.widgets.TbEditableColumn',
              'name' => 'num_estacionamiento',
              'editable' => 
                  array(
                      'type' => 'textarea',
                      'model'     => $model,
                      'attribute' => 'num_estacionamiento',                           
                      'url' => $this->createUrl('actualizarcampos'),
                       'placement' => 'right',  
                       'emptytext' => 'N° Estacionamiento..',                          
                  )
        ),

        array(
              'class' =>'bootstrap.widgets.TbEditableColumn',
              'name' => 'esquina',
              'editable' => 
                  array(
                      'type' => 'select2',
                      'model'     => $model,
                      'attribute' => 'esquina',                           
                      'url' => $this->createUrl('actualizarcampos'),
                      'source' => array('SI', 'NO'),
                       'emptytext' => 'Esquina..',                          
                  )
        ),  

  		array(
                    'class' => 'bootstrap.widgets.TbToggleColumn',
                    'toggleAction' => 'apartamento/toggle',
                    'name' => 'activo',
                    'header' => 'Activo',
                    'filter'=>false,
        ),      
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
