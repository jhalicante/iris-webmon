<?php global $conn; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo SITE_NAME; ?> - Dashboard</title>
		<meta name="description" content="Iris: Location- Based Notification Blast for immediate Response and Mitigation" />
		<meta name="keywords" content="Iris: Location- Based Notification Blast for immediate Response and Mitigation" />
        <meta name="author" content="YourCuteProgrammer"/>
        
        <!-- Bootstrap table CSS -->
    	<link href="<?php echo ASSET_URL; ?>/vendors/bower_components/bootstrap-table/dist/bootstrap-table.css" rel="stylesheet" type="text/css"/>

        <?php include './pages/common/header-scripts.php'; ?>
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active pimary-color-gold">
					
			<!-- Top Menu Items -->
			<?php include './pages/authorize/admin/include/topbar-nav.php'; ?>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<?php include './pages/authorize/admin/include/sidebar-nav.php'; ?>
			<!-- /Left Sidebar Menu -->

			<?php include './pages/authorize/admin/inbox.php'; ?>
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container">
					<!-- Title -->	
					<br>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Incident Reported Lists</h6>									
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div  class="tab-struct custom-tab-1">
											<ul role="tablist" class="nav nav-tabs" id="myTabs_7">

												<li class="dropdown" role="presentation">
													<a  data-toggle="dropdown" class="dropdown-toggle" style="padding-left:0;" id="myTabDrop_7" href="#" aria-expanded="false">
														Select Menu
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu" id="myTabDrop_7_contents">
														<li>
															<a  data-toggle="tab" role="tab" href="#firelist" aria-expanded="true" style="padding:8px;"> 
															<i class="fa fa-list mr-10 txt-dark"></i> General Lists</a>
														</li>
														<li>
															<a  data-toggle="tab" role="tab" href="#firelist" aria-expanded="true" style="padding:8px;"> 
															<i class="icon-fire mr-10 text-danger"></i> Fire List</a>
														</li>
														<li class="">
															<a  data-toggle="tab" role="tab" href="#carcrash" aria-expanded="false" style="padding:8px;">
															<i class="ti-car mr-10 text-warning"></i>Car Crash/Police List</a>
														</li>
														<li class="">
															<a  data-toggle="tab" role="tab" href="#medicallist" aria-expanded="false" style="padding:8px;">
															<i class="fa fa-hospital-o mr-10 text-success"></i>Medical List</a>
														</li>
													</ul>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent_7">
												<div id="firelist" class="tab-pane fade in active " role="tabpanel" style="padding-top:0px;">
													<?php include './pages/authorize/admin/tabs-content/fire-lists.php'; ?>
												</div>
												<div id="carcrash" class="tab-pane fade in" role="tabpanel" style="padding-top:0px;">
													<?php include './pages/authorize/admin/tabs-content/car-crash-police-list.php'; ?>												
												</div>
												<div  id="medicallist" class="tab-pane fade in" role="tabpanel" style="padding-top:0px;">
													<?php include './pages/authorize/admin/tabs-content/medical-list.php'; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
				<!-- Footer -->
				<?php include './pages/common/footer-content.php'; ?>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		<?php include './pages/authorize/admin/include/modal-view-ir-details.php'; ?>

		
        <!-- JavaScript -->
        <?php include './pages/authorize/admin/include/footer.php'; ?>		
		
	</body>
</html>