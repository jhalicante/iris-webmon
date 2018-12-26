<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo SITE_NAME ?> - Sign Up</title>
		<?php include './pages/common/header-scripts.php'; ?>
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			
			<?php include './pages/common/entry-header.php'; ?>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign up to </h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form action="#">
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="fname">Firstname</label>
													<input type="text" class="form-control" required="" name="fname" id="fname" placeholder="Enter Firstname">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="mname">Middlename</label>
													<input type="text" class="form-control" required="" id="exampleInputpwd_3" placeholder="Enter Middlename">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="lname">Lastname</label>
													<input type="text" class="form-control" required="" name="lname" id="lname" placeholder="Enter Lastname">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="contact-no">Contact Number</label>
													<input type="number" class="form-control" required="" name="contact-no" id="contact-no" placeholder="Enter Contact Number">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="address">Address</label>
													<textarea name="address" class="form-control" id="address" cols="30" rows="2" style="resize:none;" placeholder="Enter Address"></textarea>
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="username">Username</label>
													<input type="text" class="form-control" required="" name="username" id="username" placeholder="Username">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="password">Password</label>
													<input type="password" class="form-control" autocomplete required="" id="password" name="password" placeholder="Enter Password">
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary btn-outline fancy-button btn-0">sign Up &nbsp; <i class="ti-arrow-right"></i> </button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		<?php include './pages/common/footer-scripts.php'; ?>
	</body>
</html>
