<?php

namespace app\controllers;
use app\models\Webhook;
use app\models\Message;
class WebHookController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWeb($i){
    	//Checar si el hash existe
    	$Webhook = new Webhook();
    	$Message = new Message();
        	
    	if($Webhook->checkIfHashExist($i)>0){
            $Webhook->checkIfHashExist($i);
    	}
    	else{
    		return "Not found";
    	}
    	//enviar el mensaje al metodo que lo pede guardar.
    	//return $this->render('index');
    }
}
