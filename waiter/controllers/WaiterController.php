<?php

namespace waiter\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class WaiterController extends \yii\web\Controller
{
	public $layout ='waitermain';
	

    public function actionIndex()
    {
    	if($_POST){
    		var_dump($_POST);exit;
    	}
        return $this->render('index');
    }
     

}
