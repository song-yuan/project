<?php
namespace common\base;
use Yii;
use yii\web\Controller;
use common\models;
class BackendController extends \yii\web\Controller
{
	public function init(){
		
	}
	public function beforeAction($action){
		\Yii::$app->params['companyId']  = \Yii::$app->request->get('companyId',0);
		if(\Yii::$app->user->isGuest){
			$this->goHome();
		}
		if(!\Yii::$app->user->getIdentity()->isAdmin()){
			$this->goHome();
		}
		if(\Yii::$app->user->getIdentity()->role == \common\models\User::ADMIN){
			if(\Yii::$app->controller->id != 'company' && !\Yii::$app->params['companyId']){
				\Yii::$app->response->redirect(array('company/index'));
			}
		}
		return parent::beforeAction($action);
	}
}