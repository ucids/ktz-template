<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Archivo de conexión a la base de datos (db.php)
include(realpath(__DIR__ . '/../data/db.php'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Consulta para obtener el hash de la contraseña del usuario
	$query = "SELECT id, username, email, role, password FROM users WHERE username = :username";
	$stmt = $pdo->prepare($query);
	$stmt->bindParam(':username', $username);
	$stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($user && password_verify($password, $user['password'])) {
		// Inicio de sesión exitoso
		// Puedes almacenar información del usuario en la sesión si es necesario
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['username'] = $user['username'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['role'] = $user['role'];
		$_SESSION['logged_in'] = true;

		// Redirige al usuario a la página de inicio, por ejemplo
		header("Location: /index.php?departamento=ingenieria");
		exit();
	} else {
		// Credenciales incorrectas
		$error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
	}
}
$base = "../";
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href=<?php echo $base; ?> />
	<title>Katzkin</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="katzkin dashboard" />
	<meta property="og:url" content="#" />
	<meta property="og:site_name" content="login" />
	<link rel="canonical" href="#" />
	<link rel="shortcut icon" href="assets/media/ktz/ki.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<!-- <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> -->
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<style>
	.light-danger {
		background-color: var(--bs-danger-light) !important;
	}
</style>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
	<!--begin::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Page bg image-->
		<style>
			body {
				background-image: url('../assets/media/auth/bg14.jpg');
			}
		</style>
		<!--end::Page bg image-->

		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid flex-lg-row">
			<!--begin::Aside-->
			<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
				<!--begin::Aside-->
				<div class="d-flex flex-center flex-lg-start flex-column">
					<a href="#" class="mb-7">
						<img alt="Logo" class="h-150px" src="/assets/media/ktz/logo_white.png">
					</a>
				</div>
				<!--begin::Aside-->
			</div>
			<!--begin::Aside-->

			<!--begin::Body-->
			<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
				<!--begin::Card-->
				<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
					<!--begin::Wrapper-->
					<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
						<div class="d-flex flex-center flex-lg-start flex-column">
							<a href="#" class="mb-7">
								<img alt="Logo" class="px-20px h-150px" src="/assets/media/ktz/cow_logo.png">
							</a>
						</div>
						<!--begin::Form-->
						<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" method="post">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">
									Iniciar Sesión
								</h1>
								<!--end::Title-->

								<!--begin::Subtitle-->
								<!-- <div class="text-gray-500 fw-semibold fs-6">
									Ingresa Tu usuario y contraseña
								</div> -->
								<!--end::Subtitle--->
							</div>
							<!--begin::Heading-->

							<!--begin::Separator-->
							<div class="separator separator-content my-14">
								<span class="w-125px text-gray-500 fw-semibold fs-7">username</span>
							</div>
							<!--end::Separator-->
							<?php
							// Mostrar el mensaje de error si existe
							if (isset($error_message)) {
							?>
								<!--begin::Alert-->
								<div class="alert alert-danger d-flex align-items-center p-5">
									<!--begin::Icon-->
									<i class="ki-solid ki-information-5 fs-2hx text-success me-4"></i>
									<!--end::Icon-->

									<!--begin::Wrapper-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h4 class="mb-1 text-dark">Error</h4>
										<!--end::Title-->

										<!--begin::Content-->
										<span><? echo $error_message; ?></span>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Alert-->
							<?
							}
							?>
							<!--begin::Input group--->
							<div class="fv-row mb-8 fv-plugins-icon-container">
								<!--begin::Email-->
								<input type="text" placeholder="username" name="username" id="username" required autocomplete="off" class="form-control bg-transparent">
								<!--end::Email-->
								<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
							</div>

							<!--end::Input group--->
							<div class="fv-row mb-3 fv-plugins-icon-container">
								<!--begin::Password-->
								<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent">
								<!--end::Password-->
								<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
							</div>
							<!--end::Input group--->

							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>

								<!--begin::Link-->
								<!-- <a href="/metronic8/demo35/../demo35/authentication/layouts/creative/reset-password.html" class="link-primary">
									Forgot Password ?
								</a> -->
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->

							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

									<!--begin::Indicator label-->
									<span class="indicator-label">
										Sign In</span>
									<!--end::Indicator label-->

									<!--begin::Indicator progress-->
									<span class="indicator-progress">
										Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									</span>
									<!--end::Indicator progress--> </button>
							</div>
							<!--end::Submit button-->

							<!--begin::Sign up-->
							<!-- <div class="text-gray-500 text-center fw-semibold fs-6">
								Not a Member yet?

								<a href="/metronic8/demo35/../demo35/authentication/layouts/creative/sign-up.html" class="link-primary">
									Sign up
								</a>
							</div> -->
							<!--end::Sign up-->
						</form>
						<!--end::Form-->

					</div>
					<!--end::Wrapper-->

					<!--begin::Footer-->
					<div class="d-flex flex-stack px-lg-10">


						<!--begin::Links-->
						<div class="d-flex fw-semibold text-primary fs-base gap-5">
							<a href="#" target="_blank">Terms</a>
							<a href="/metronic8/demo35/../demo35/pages/contact.html" target="_blank">Contactanos</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->

	<!--begin::Javascript-->
	<script>
		var hostUrl = "/metronic8/demo35/assets/";
	</script>

	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="/metronic8/demo35/assets/plugins/global/plugins.bundle.js"></script>
	<script src="/metronic8/demo35/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->


	<!--begin::Custom Javascript(used for this page only)-->
	<script src="/metronic8/demo35/assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->



	<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
		<defs id="SvgjsDefs1002"></defs>
		<polyline id="SvgjsPolyline1003" points="0,0"></polyline>
		<path id="SvgjsPath1004" d="M0 0 "></path>
	</svg>
</body>
<!--end::Body-->

</html>