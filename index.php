<?php 
require_once 'connection/conn.php'; 
include 'backend/login/t_login.php';
?>

<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TPQ NURUL QALBI">
	<meta name="keyword" content="bootstrap admin template">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> <!--[ Favicon]-->
    <title>TPQ NURUL QALBI</title>
	
    <!--[ Favicon]-->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">

	<!--[ Template main css file ]-->
	<link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body data-bvite="theme-CeruleanBlue" class="layout-border svgstroke-a layout-default auth">

	<!-- start: main grid layout -->
	<main class="container-fluid px-0">

		<!-- start: project logo -->
		<div class="px-xl-5 px-4 auth-header" data-bs-theme="light">
			<a href="index.php" class="brand-icon text-decoration-none d-flex align-items-center" title="Judul">
				<img src="assets/images/logo/logo.png" alt="Logo TPQ NURUL QALBI" class="me-2" style="height: 100px;">
				<span class="fw-bold ps-2 fs-5">
					<span style="color: blue;">TPQ</span> 
					<span style="color: blue;">NURUL QALBI</span>
					<br>
					<span>PT. MUSTIKA SEMBULUH</span>
				</span>

			</a>
		</div>


		<!-- start: page menu link -->
		<aside class="px-xl-5 px-4 auth-aside" data-bs-theme="light">
			<img class="login-img" src="assets/images/tpq/login_image2.jpg" alt="TPQ NURUL QALBI">
		</aside>

		<!-- start: page body area -->
		<div class="px-xl-5 px-4 auth-body">
			<form action="" method="post">
				<ul class="row g-3 list-unstyled li_animate">
					<li class="col-12">
						<label class="form-label">Username</label>
						<input type="text" name="username" class="form-control form-control-lg" placeholder="Masukkan username" required>
					</li>
					<li class="col-12">
						<div class="form-label">
							<span class="d-flex justify-content-between align-items-center">
								Password
							</span>
						</div>
						<input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan password" required>
					</li>
					<li class="col-12 my-lg-4">
                        <button type="submit" class="btn btn-lg w-100 btn-primary text-uppercase mb-2" name="login"><span class="semibold">Masuk</span></button>
					</li>
				</ul><!--[ ul.row end ]-->
			</form>
		</div>

		<!-- start: page footer -->
		<footer class="px-xl-5 px-4">
			<p class="mb-0 text-muted">© 2024 TPQ NURUL QALBI, All Rights Reserved.</p>
		</footer>
		
	</main>

</body>
</html>
