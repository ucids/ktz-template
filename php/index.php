<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	session_start();
	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
		// El usuario no ha iniciado sesión, redirige a la página de inicio de sesión o muestra un mensaje de error
		header("Location: admin/login.php");
		exit();
	}
	include 'components/head/header.php';
	include 'admin/session_manager.php';
    require_once 'components/head/header.php';

?>
<!--end::Head-->
<script type="module">
    import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
    mermaid.initialize({ startOnLoad: true });
  </script>
<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
    data-kt-app-header-secondary-enabled="false" class="app-default">
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <?php require_once 'components/navbar/nav-'.$rol.'.php';?>
            <!--end:Header-->
            <!--begin:Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                <!--begin::Wrapper container-->
                <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Toolbar-->
                            <? include 'components/toolbar/toolbar.php'; ?>
                            <!--end::Toolbar-->
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                                <?
                                    require_once 'components/toolbar/toolbar.php';
									$page = isset($_GET['page']) ? $_GET['page'] : 'default';
									// Verificar si el page existe en el array y cargar la vista correspondiente
									include 'views/'. $rol .'/' . $page . '.php';
								?>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--begin::Footer -->
                        <? include 'components/footer/footer.php';?>
                        <!--end::Footer -->
                        <!--end::Main-->
                    </div>
                    <!--end::Wrapper container-->
                </div>
            </div>
            <!--end::Page-->
        </div>
    </div>
    <!--end::App-->
    <script>
    var hostUrl = "assets/";
    </script>
    <script>
        function setupDataTable(tableId){
            $(tableId).DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        }
        setupDataTable("#kt_datatable_dom_positioning");
        setupDataTable("#kt_datatable_dom_positioning2");
        setupDataTable("#kt_datatable_dom_positioning3");
    </script>

    <script>
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <?php require_once 'context/index-script.php'; ?>
</body>

</html>