<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo SITE_NAME; ?> - Sign In</title> 
		<?php include './pages/common/header-scripts.php'; ?>
	</head>
	<body>
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		
		<div class="wrapper pa-0">
			
			<?php include './pages/common/entry-header.php'; ?>

			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float pa-20">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to start your session</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your username and password below</h6>
										</div>	
										<div class="form-wrap">
											<form method="post" enctype="multipart/form-data" id="signin-form">
												<div class="form-group">
													<label class="control-label mb-10" for="username">Username</label>
													<input type="text" class="form-control" name="username" required="" id="username" placeholder="Enter Username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="password">Password</label>
													<!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" name="password" autocomplete required="" id="password" placeholder="Enter Password">
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary btn-outline fancy-button btn-0" name="signin"> sign in  &nbsp; <i class="ti-arrow-right"></i> </button>
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
		
		<?php include './pages/common/footer-scripts.php'; ?>
		<script src="<?php echo ASSET_URL; ?>/js-functions/entry.js"></script>
	</body>
</html>
