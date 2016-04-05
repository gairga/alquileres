<?php $box = $this->beginWidget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'Detalle de Pagos Anteriores',
        'headerIcon' => 'th-list',
    	'padContent' => false,
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);?>
    <table class="table">
        <thead>
        <tr>
            <th>Fecha de Corte</th>
            <th>Pago a Tiempo</th>
            <th>Fecha de Pago</th>
            <th>N° de recibo</th>
            <th>Monto Pagado</th>
            <th>Saldo Pendiente</th>
            <th>Recargo</th>
            <th>Concepto</th>
            <th>Observaciones</th>
        </tr>
        </thead>
        <tbody>
        <tr class="odd">
            <td style="width: 60px">---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr class="even">
            <td style="width: 60px">---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr class="odd">
            <td style="width: 60px">---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        </tbody>
    </table>
<?php $this->endWidget(); ?>