
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/assets/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/images/favicon-16x16.png">
		<link rel="manifest" href="<?= base_url() ?>/assets/images/site.webmanifest">
		<title>Sikat - Sistem Keamanan Terpadu Perdos Unhas Tamalanrea</title>
		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
	</head>
	<body class="authentication">
		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->
		<div class="login-container">
			<div class="container-fluid h-100">
			<!-- Row start -->
			<div class="row g-0 h-100">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-sm-block">
					<div class="login-about">
						<div class="slogan">
							<img src="<?= base_url() ?>/assets/images/logo-sikat.png" class="w-50 img-fluid rounded mx-auto d-block" alt="...">
							<div class="about-desc text-center">
								<span class="text-danger">SIKAT</span>
								<span>Sistem Keamanan Terpadu Perumahan Dosen Unhas Tamalanrea</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="login-wrapper">
						<form action="#">
							<div class="login-screen">
								<div class="login-body">
									<img src="<?= base_url() ?>/assets/images/logo-sikat.png" class="w-30 img-fluid rounded mx-auto d-block d-sm-none" alt="...">
									<h5 class="text-center text-success">Selamat Datang,<br><small>Silahkan Login Untuk Melanjutkan.</small></h5>
									<div class="actions">
										<div data-width="300" data-height="200" data-longtitle="true">
											<?= $data['googleButton'] ?>
										</div>
									</div>
								</div>
								<div class="login-footer text-center">
									<h4>Call Center <span class="text-danger">SIKAT</span></h4>
									<span class="fw-bolder text-warning h4">081319313236</span>
									<span class="fw-bolder text-warning h4">085255902634</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Row end -->
			</div>
		</div>
		<script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
		<script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url() ?>/assets/js/modernizr.js"></script>
		<script src="<?= base_url() ?>/assets/js/moment.js"></script>
		<script src="<?= base_url() ?>/assets/js/main.js"></script>
	</body>
</html>
