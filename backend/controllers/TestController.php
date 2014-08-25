<?php

namespace backend\controllers;
use Yii;
class TestController extends \yii\web\Controller
{
    public function actionGenpwd()
    {
    	$param = Yii::$app->request->getQueryParams();
    	if (isset($param['p'])){
    		echo Yii::$app->security->generatePasswordHash($param['p']);exit;
    	}else{
    		header('content-type:text/html;charset=utf-8');
    		echo '请输入参数[p],例如p=123123';exit;
    	}
    }
}
