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
				<li class="start ">
					<a href="#">
					<i class="fa fa-home"></i> 
					<span class="title">Dashboard</span>					
					</a>
				</li>
				<li class="start ">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['site/index']);?>">
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
				<li class="start ">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['site/index']);?>">
					<i class="fa fa-home"></i> 
					<span class="title">企业管理</span>					
					</a>
				</li>
				<li class="start ">
					<a href="<?php echo \Yii::$app->urlManager->createUrl(['site/index']);?>">
					<i class="fa fa-user"></i> 
					<span class="title">操作员管理</span>					
					</a>
				</li>
												
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-user"></i> 
					<span class="title">Login Options</span>					
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="login.html">
							Login Form 1							</a>
						</li>
						<li >
							<a href="login_soft.html">
							Login Form 2							</a>
						</li>
					</ul>
				</li>
				<li class="active ">
					<a href="javascript:;">
					<i class="fa fa-th"></i> 
					<span class="title">Data Tables</span>					
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="table_basic.html">
							Basic Tables							</a>
						</li>
						<li >
							<a href="table_responsive.html">
							Responsive Tables							</a>
						</li>
						<li class="active">
							<a href="table_managed.html">
							Managed Tables							</a>
						</li>
						<li >
							<a href="table_editable.html">
							Editable Tables							</a>
						</li>
						<li >
							<a href="table_advanced.html">
							Advanced Tables							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-file-text"></i> 
					<span class="title">Portlets</span>					
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="portlet_general.html">
							General Portlets							</a>
						</li>
						<li >
							<a href="portlet_draggable.html">
							Draggable Portlets							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-map-marker"></i> 
					<span class="title">Maps</span>					
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="maps_google.html">
							Google Maps							</a>
						</li>
						<li >
							<a href="maps_vector.html">
							Vector Maps							</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="charts.html">
					<i class="fa fa-bar-chart-o"></i> 
					<span class="title">Visual Charts</span>					
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->