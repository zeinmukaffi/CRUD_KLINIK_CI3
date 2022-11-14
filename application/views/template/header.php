<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Klinik Bahagia</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/weather-icon/css/weather-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/weather-icon/css/weather-icons-wind.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/summernote/summernote-bs4.css">

    <script src="https://kit.fontawesome.com/a953ebe10c.js" crossorigin="anonymous"></script>
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">
	<!-- Start GA -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-94034622-3');

	</script>
	<!-- /END GA -->
</head>

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
						class="fas fa-bars"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
						class="fas fa-search"></i></a></li>
					</ul>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown"
							class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="<?php echo base_url() ?>assets/img/avatar/avatar-1.png"
								class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata("nama"); ?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>