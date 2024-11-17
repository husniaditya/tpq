<?php 
require_once 'connection/conn.php';

if(!isset($_SESSION["LOGINID"]))
{
    ?><script>alert('Silahkan login dahulu');</script><?php
    ?><script>document.location.href='index.php';</script><?php
    die(0);
}

include 'backend/master/user/t_user.php';
?>

<!doctype html>
<html lang="en">
<head>
    
    <?php include 'content/head.php'; ?>

</head>

<body data-bvite="theme-CeruleanBlue" class="layout-border svgstroke-a layout-default rightbar-hide">

	<!-- start: main grid layout -->
	<main class="container-fluid px-0">

		<!-- start: project logo -->
		<div class="px-md-4 px-2 pt-2 pb-2 brand" data-bs-theme="none">
			<?php include 'content/sidebarlogo.php'; ?>
		</div>

		<!-- start: page header -->
		<header class="px-md-4 px-2" data-bs-theme="none">
			<?php include 'content/header.php'; ?>
		</header>

		<!-- start: page menu link -->
		<aside class="ps-4 pe-3 py-3 sidebar" data-bs-theme="none">
			<?php include 'content/sidebar.php'; ?>
		</aside>

		<!-- start: page header area -->
		<div class="px-md-4 px-2 py-2 page-header" data-bs-theme="none">

			<div class="d-flex align-items-center">
				<button class="btn d-none d-xl-inline-flex me-3 px-0 sidebar-toggle" type="button">
					<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
						<path d="M9 4v16"></path>
						<path d="M15 10l-2 2l2 2"></path>
					</svg>
				</button>
				<ol class="breadcrumb mb-0 bg-transparent">
					<li class="breadcrumb-item"><a href="dashboard.php" title="dashboard">Dashboard</a></li>
					<li class="breadcrumb-item" aria-current="page" title="master">Master</li>
					<li class="breadcrumb-item active" aria-current="page" title="pengguna">Pengguna</li>
				</ol>
			</div>

		</div>

		<!-- start: page body area -->
		<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
			<?php include 'content/master/user/c_user.php'; ?>
		</div>

		<!-- start: page footer -->
		<footer class="px-md-4 px-2">
			<?php include 'content/footer.php'; ?>
		</footer>
		
	</main>

	<!--[ bvite template vender js ]-->
	<?php include 'content/js.php'; ?>
	<script type="text/javascript" src="js/master/user/user.js"></script>
</body>
</html>
