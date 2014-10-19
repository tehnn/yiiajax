<form method="POST">
    <?php
    $list_changwat = CHtml::listData(Cchangwat::model()->findAll(), 'changwatcode', 'changwatname2');
    $sel_prov = !empty($_POST['prov']) ? $_POST['prov'] : ''; // ตรวจสอบการเลือกจังหวัดเมื่อกด submit
    echo CHtml::dropDownList('prov', $sel_prov, $list_changwat, array('prompt' => '--จังหวัด--',
        'ajax' => array(
            'type' => 'GET',
            'url' => Yii::app()->createUrl('Ajax/LoadAmp'), //or $this->createUrl('loadcities') if '$this' extends CController
            'update' => '#amp',
            //'success'=>"function(data){ $('#cbx_amp').html(data);}", //or useing 'success' 
            'data' => array('prov_code' => 'js:this.value'),
        ))
    );
    ?>
    <?php
    

    $prov_code = !empty($_POST['prov']) ? $_POST['prov'] : '00';
    $model = CAmpur::model()->findAll("changwatcode = $prov_code");
    $list_amp = CHtml::listData($model, 'ampurcode', 'ampurname2');
    
    $sel_amp = $sel_prov = !empty($_POST['amp']) ? $_POST['amp'] : '';
    echo CHtml::dropDownList('amp', $sel_amp, $list_amp, array('prompt' => '--อำเภอ--',
        'ajax' => array(
            'type' => 'GET',
            'url' => Yii::app()->createUrl('Ajax/LoadTmb'),
            'update' => '#tmb',
            'data' => array('amp_code' => "js:this.value", 'prov_code' => "js:$('#prov').val()"),
        ))
    );
    ?>

    <?php
    $amp_code = !empty($_POST['amp']) ? $_POST['amp'] : '00';
    $model = Ctambon::model()->findAll(array("condition" => "changwatcode=$prov_code and ampurcode=$amp_code"));
    $list_tmb = CHtml::listData($model, 'tamboncode', 'tambonname2');

    $sel_tmb = !empty($_POST['tmb']) ? $_POST['tmb'] : '';
    echo CHtml::dropDownList('tmb', $sel_tmb, $list_tmb, array('prompt' => '--ตำบล--'));
    ?>
    <input type="submit"  value="   OK   "/>
</form>
<hr>
<?php
if ($data !== NULL)
    CVarDumper::dump($data);
?>