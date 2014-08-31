		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        	
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start <?php if(\Yii::$app->controller->id == 'site') echo 'active';?>">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['site/index']);?>">
					<i class="fa fa-home"></i> 
					<span class="title">Dashboard</span>					
					</a>
				</li>
				<li class="start">
					<a href="">
					<i class="fa fa-home"></i> 
					<span class="title">产品管理</span>					
					</a>
				</li>
				<li class="start ">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['site/index']);?>">
					<i class="fa fa-home"></i> 
					<span class="title">订单管理</span>					
					</a>
				</li>
				<li class="start ">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['site/index']);?>">
					<i class="fa fa-home"></i> 
					<span class="title">位置管理</span>					
					</a>
				</li>
				<li class="start <?php if(\Yii::$app->controller->id == 'company') echo 'active';?>">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['company/index']);?>">
					<i class="fa fa-home"></i> 
					<span class="title">企业管理</span>					
					</a>
				</li>
				<li class="start ">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['user/index','companyId'=>\Yii::$app->params['companyId']]);?>">
					<i class="fa fa-user"></i> 
					<span class="title">操作员管理</span>					
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->