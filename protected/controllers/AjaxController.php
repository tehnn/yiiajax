<?php
class AjaxController extends Controller {
    
     public function actionLoadAmp($pcode) {
        $data = CAmpur::model()->findAll("changwatcode = $pcode");

        $data = CHtml::listData($data, 'ampurcode', 'ampurname');
        echo CHtml::tag('option', array('value' => ''), CHtml::encode("-- เลือกอำเภอ --"), true);
        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }
    
       public function actionLoadTmb($pcode,$acode) {
        $data = Ctambon::model()->findAll(array("condition"=>"changwatcode =  $pcode and ampurcode=$acode"));

        $data = CHtml::listData($data, 'tamboncode', 'tambonname');
        echo CHtml::tag('option', array('value' => ''), CHtml::encode("-- เลือกตำบล --"), true);
        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }
    
}

