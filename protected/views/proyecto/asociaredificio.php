<?php
$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
    'id'=>'asociaredificio-form',
    'enableAjaxValidation'=>false,
));

    echo $form->dropDownListGroup(
            $model,
            'id_proyecto',
            array(
                'wrapperHtmlOptions' => array(
                    'class' => 'col-sm-5',
                ),
                'widgetOptions' => array(
                    'data' => array('Seleccione...', 'LOS TONELES', 'TOSCANA','PRUEBA'),
                    'htmlOptions' => array(),
                )
            )
        ); 

echo CHtml::beginForm('/', 'post', ['id' => 'issue-574-checker-form']);
$this->widget(
    'booster.widgets.TbSelect2',
    array(
        'name' => 'group_id_list',
        'data' => array('RU' => '3A', 'CA' => '3B', 'US' => '3C', 'GB' => '3D'),
        'htmlOptions' => array(
            'multiple' => 'multiple',
        ),
    )
);
echo CHtml::endForm();
$this->widget(
    'booster.widgets.TbButton',
    array(
        'label' => 'Selecciona para agregar los edificios!',
        'htmlOptions' => array(
            'onclick' => 'js:$.ajax({
                url: "/",
                type: "POST",
                data: $("#issue-574-checker-form").serialize()
            });'
       )
    )
);
?>

<?php $this->endWidget(); ?>