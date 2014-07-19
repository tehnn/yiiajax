<?php

class AjaxController extends Controller {

    public function actionLoadAmp($prov_code) {
        $data = CAmpur::model()->findAll("changwatcode = $prov_code");

        $data = CHtml::listData($data, 'ampurcode', 'ampurname2');
        echo CHtml::tag('option', array('value' => ''), CHtml::encode("-- เลือกอำเภอ --"), true);
        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    public function actionLoadTmb($prov_code, $amp_code) {
        $data = Ctambon::model()->findAll(array("condition" => "changwatcode=$prov_code and ampurcode=$amp_code"));

        $data = CHtml::listData($data, 'tamboncode', 'tambonname2');
        echo CHtml::tag('option', array('value' => ''), CHtml::encode("-- เลือกตำบล --"), true);
        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

}

