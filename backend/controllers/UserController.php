<?php

namespace backend\controllers;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use common\base;

class UserController extends  \common\base\BackendController
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
                        'actions' => ['index','create','update'],
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
    	$query = \common\models\User::find()->with('company')->where(['company_id'=>\Yii::$app->params['companyId']]);
    	$param = \common\base\Func::getList($query);
        return $this->render('index' , $param );
    }
	public function actionCreate(){
		$this->layout = 'formLayout';
		$model = new \common\models\User();
		if($model->load($_POST) && $model->validate()) {
			if($model->save()){
				\Yii::$app->session->setFlash('success','create successful');
				\Yii::$app->response->redirect(array('company/index'));
			}
		}
		return $this->render('create',['model' => $model]);
	}
	public function actionUpdate($userId){
		
	}
}
