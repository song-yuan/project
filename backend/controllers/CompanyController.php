<?php

namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\backend\models\Company;

class CompanyController extends \yii\web\Controller
{
	public $layout = 'listLayout';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['logout', 'index','create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
	public function actionIndex()
    {
        return $this->render('index');
    }
	public function actionCreate(){
		$model = new \backend\models\Company();
		
		if($model->load($_POST) && $model->validate()) {
			var_dump($model);exit;
		}
		return $this->render('create',['model'=>$model]);
	}
}
