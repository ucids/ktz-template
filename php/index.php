<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<? require_once 'components/head/header.php'; ?>
<!--end::Head-->

<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="false" class="app-default">
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<? require_once 'components/navbar/header-menu.php'; ?>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<? require_once 'views/dashboard.php'; ?>
			<!--end::Wrapper-->

		</div>
	</div>
	<!--end::Page-->
	</div>
	<!--end::App-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<?php require_once 'context/index-script.php';?>
</body>

</html>