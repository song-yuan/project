<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = $model->isNewRecord ? '添加操作员' : '修改操作员信息' ;
$this->params['breadcrumbs'][] = $this->title;
?>
	<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->   
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
					<h3 class="page-title">
						Form Layouts
						<small>form layouts</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>Actions</span> <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Form Stuff</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">Form Layouts</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-reorder"></i>Form Actions On Bottom</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php $form = ActiveForm::begin(['id' => 'company-form','options' => ['class' => 'form-horizontal','enctype' => 'multipart/form-data']]); ?>
								<div class="form-body">
									<div class="form-group">
										<?php echo Html::activeLabel($model, 'username',['class' => 'col-md-3 control-label']);?>
										<div class="col-md-4">
											<?php echo Html::activeInput('text',$model, 'username',['class' => 'form-control','placeholder'=>$model->getAttributeLabel('username')]);?>
											<?php echo Html::error($model, 'username' , ['tag' => 'span','class' => 'error'])?>
										</div>
									</div>
									
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn blue">确定</button>
										<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/index','companyId' =>  \Yii::$app->params['companyId']]);?>" class="btn default">返回</a>                              
									</div>
								</div>
							<?php ActiveForm::end(); ?>
							<!-- END FORM--> 
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->    
		</div>
		<!-- END PAGE -->  