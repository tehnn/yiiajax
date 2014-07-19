<?php

class SiteController extends Controller {

    public function actionIndex() {

        $this->render('v_dropdown', array(
            'data' => count($_POST) > 0 ? $_POST : NULL
        ));
    }

   

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}