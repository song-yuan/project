<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<?php $this->registerCssFile('plugins/font-awesome/css/font-awesome.min.css');?>
	<?php $this->registerCssFile('plugins/uniform/css/uniform.default.css');?>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<?php $this->registerCssFile('plugins/select2/select2_metro.css');?>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES --> 
	<?php $this->registerCssFile('css/style-metronic.css');?>
	<?php $this->registerCssFile('css/style.css');?>
	<?php $this->registerCssFile('css/style-responsive.css');?>
	<?php $this->registerCssFile('css/themes/default.css');?>
	<?php $this->registerCssFile('css/pages/login-soft.css');?>
	<?php $this->registerCssFile('css/custom.css');?>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<?php $this->beginBody() ?>
	<!-- BEGIN LOGO -->
	<div class="logo">
		<img src="img/logo-big.png" alt="" /> 
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<?= $content ?>
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2013 &copy; Metronic - Admin Dashboard Template.
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!-- END CORE PLUGINS -->
	<!-- END JAVASCRIPTS -->
	<?php $this->endBody() ?>
	<?php $this->registerJsFile('plugins/jquery-migrate-1.2.1.min.js');?>
	<?php $this->registerJsFile('plugins/bootstrap/js/bootstrap.min.js');?>
	<?php $this->registerJsFile('plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js');?>
	<?php $this->registerJsFile('plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>
	<?php $this->registerJsFile('plugins/jquery.blockui.min.js');?>
	<?php $this->registerJsFile('plugins/jquery.cookie.min.js');?>
	<?php $this->registerJsFile('plugins/uniform/jquery.uniform.min.js');?>
	<?php $this->registerJsFile('plugins/jquery-validation/dist/jquery.validate.min.js');?>
	<?php $this->registerJsFile('plugins/backstretch/jquery.backstretch.min.js');?>
	<?php $this->registerJsFile('plugins/select2/select2.min.js');?>
	<?php $this->registerJsFile('scripts/app.js');?>
	<?php $this->registerJsFile('scripts/login-soft.js');?>
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
</body>
<!-- END BODY -->
</html>
<?php $this->endPage() ?>
