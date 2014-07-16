<?php
Yii::app()->clientScript->registerScriptFile('js/script.js');
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<br>
<div class="form">
    <?php echo CHtml::beginForm(); ?>
    <div class="row">
        <?php $list_changwat = CHtml::listData(Cchangwat::model()->findAll(), 'changwatcode', 'changwatname2'); ?>
        <?php
        echo CHtml::dropDownList('cb_changwat', $select_p, $list_changwat, array(
            'empty' => '--  จังหวัด  --',
            'onchange' => "return ajxLoadAmp(this.value)"
        ));
        ?>
    </div>
    <div class="row">
        <?php
        echo CHtml::dropDownList('cb_ampur', $select_a, array(), array(
            'empty' => '--  อำเภอ  --',
            'onchange' => "return ajxLoadTmb($('#cb_changwat').val(),this.value)"
        ));
        ?>
    </div>

    <div class="row">
        <?php
        $list_tmb = array();
        echo CHtml::dropDownList('cb_tmb', $select_t, array(), array(
            'empty' => '--  ตำบล  --',
        ));
        ?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('ตกลง'); ?>
    </div>

    <?php echo CHtml::endForm(); ?>
</div><!-- form -->

<pre>
    <?php
    print_r($_POST);
    ?>
</pre>