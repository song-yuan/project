<?php
namespace common\base;
class BackendController extends \yii\web\Controller
{
	public function init(){
		if(\Yii::$app->user->isGuest){
			$this->goHome();
		}
		if(!\Yii::$app->user->getIdentity()->isAdmin()){
			$this->goHome();
		}
	}
	
}