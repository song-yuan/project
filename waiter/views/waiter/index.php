<?php
/* @var $this yii\web\View */

?>
<form class="form-horizontal" role="form" style="margin-top:100px;" method="post" action="<?php echo \Yii::$app->urlManager->createUrl('/waiter/index');?>">
<div class="form-body">
	<div class="form-group">
		<label class="col-md-3 control-label">手机号</label>
		<div class="col-md-9">
			<input type="text" name="mobile_number" class="form-control" placeholder="请输入手机号" value=""/>
		</div>
	</div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
			<button type="submit" class="btn green">登 录</button>                            
		</div>
	</div>
</div>
</form>
