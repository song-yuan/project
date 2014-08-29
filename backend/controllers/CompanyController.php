<?php

namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\backend\models\Company;
use common\Func;

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
                        'actions' => ['logout', 'index','create','update'],
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
    	$list = Func::getList(\backend\models\Company::find());
        return $this->render('index',$list);
    }
	public function actionCreate(){
		$model = new \backend\models\Company();
		if($model->load($_POST) && $model->validate()) {
			if($model->save()){
				Func::uploadImage($model, 'logo');
				$model->save();
				\Yii::$app->session->setFlash('success','create successful');
				\Yii::$app->response->redirect(array('company/index'));
			}
		}
		return $this->render('create',['model' => $model]);
	}
	public function actionUpdate($companyId){
		$model = $this->findModel($companyId);
		if($model->load($_POST) && $model->validate()) {
			Func::uploadImage($model, 'logo');
			if($model->save()){
				\Yii::$app->session->setFlash('success','update successful');
				\Yii::$app->response->redirect(array('company/index'));
			}
		}
		return $this->render('create',['model'=>$model]);
	}
	public function actionFreeze() {
		
	}
	public function actionUnfreaze(){
		
	}
	protected function findModel($companyId)
	{
		if (($model = \backend\models\Company::findOne($companyId)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	
}
