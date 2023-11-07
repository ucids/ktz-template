<?php 
	if (!isset($_SESSION['logged_in'])) {
	ob_start(); // Start output buffering
    // No hay sesión iniciada, redirige al usuario al formulario de inicio de sesión
    echo '<script>window.location.href = "admin/login.php";</script>';
    exit; // Asegúrate de salir del script para evitar que se siga ejecutando
}
?>


<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
    <!--begin::Wrapper container-->
    <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar  d-flex flex-stack py-4 py-lg-8 ">
                    <!--begin::Toolbar wrapper-->
                    <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                            <!--begin::Title-->
                            <h1
                                class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                Documents
                            </h1>
                            <!--end::Title-->


                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="/../demo35/index.html" class="text-muted text-hover-primary">
                                        Home </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    User Profile </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">
                                    Documents </li>
                                <!--end::Item-->

                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center pt-4 pb-7 pt-lg-1 pb-lg-2">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Menu-->
                                <a href="#" class="btn btn-sm btn-flex btn-light fw-bold" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-filter fs-5 text-gray-500 me-1"></i>
                                    Filter
                                </a>



                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_652de1a28f072">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    multiple="" data-kt-select2="true" data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_652de1a28f072"
                                                    data-allow-clear="true" data-select2-id="select2-data-1-9abt"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-2-p2e6"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="-1" aria-disabled="false">
                                                            <ul class="select2-selection__rendered"
                                                                id="select2-z8nn-container"></ul><span
                                                                class="select2-search select2-search--inline"><textarea
                                                                    class="select2-search__field" type="search"
                                                                    tabindex="0" autocorrect="off" autocapitalize="none"
                                                                    spellcheck="false" role="searchbox"
                                                                    aria-autocomplete="list" autocomplete="off"
                                                                    aria-label="Search"
                                                                    aria-describedby="select2-z8nn-container"
                                                                    placeholder="Select option"
                                                                    style="width: 100%;"></textarea></span>
                                                        </span></span><span class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->

                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                                                <!--end::Options-->

                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->

                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="">
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>

                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Button-->
                            <a href="#" class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                                Create </a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">


                    <!--begin::Navbar-->
                    <div class="card mb-6">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="/assets/media/ktz/search.png" alt="image">
                                        <!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div> -->
                                    </div>
                                </div>
                                <!--end::Pic-->

                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#"
                                                    class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max
                                                    Smith</a>
                                                <a href="#"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
                                            </div>
                                            <!--end::Name-->

                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <a href="#"
                                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                    <i class="ki-outline ki-profile-circle fs-4 me-1"></i> Developer
                                                </a>
                                                <a href="#"
                                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                    <i class="ki-outline ki-geolocation fs-4 me-1"></i> SF, Bay Area
                                                </a>
                                                <a href="#"
                                                    class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                    <i class="ki-outline ki-sms fs-4 me-1"></i> max@kt.com
                                                </a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <!--begin::Stats-->
                                            <form action="" method="POST">
                                                <div class="d-flex align-items-center flex-column w-100 mb-8 mb-lg-10">
                                                    <div
                                                        class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
                                                        <div class="input-group mb-5">
                                                            <input type="text" class="form-control" placeholder="Modelo"
                                                                aria-label="Modelo" name="search_term"
                                                                aria-describedby="basic-addon2">
                                                            <button type="submit">
                                                                <span class="input-group-text" id="basic-addon2">
                                                                    <i class="las la-search fs-1"></i>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Wrapper-->

                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Navs-->

                            <!--begin::Navs-->
                        </div>
                    </div>
                    <!--end::Navbar-->
                    <!--begin::Documents toolbar-->
                    <div class="d-flex flex-wrap flex-stack mb-6">
                        <!--begin::Title-->
                        <h3 class="fw-bold my-2">
                            My Documents
                            <span class="fs-6 text-gray-400 fw-semibold ms-1">100+ resources</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Controls-->
                        <div class="d-flex my-2">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative me-4">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i> <input type="text"
                                    id="kt_filter_search"
                                    class="form-control form-control-sm form-control-solid w-150px ps-10"
                                    placeholder="Search">
                            </div>
                            <!--end::Search-->

                            <a href="/../demo35/apps/file-manager/files.html" class="btn btn-primary btn-sm">
                                File Manager
                            </a>
                        </div>
                        <!--end::Controls-->
                    </div>
                    <!--end::Documents toolbar-->


                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">


                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-75px mb-5">
                                            <img src="/assets/media/svg/files/folder-document.svg"
                                                class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/folder-document-dark.svg"
                                                class="theme-dark-show" alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            Finance </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        7 files </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-75px mb-5">
                                            <img src="/assets/media/svg/files/folder-document.svg"
                                                class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/folder-document-dark.svg"
                                                class="theme-dark-show" alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            Customers </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        3 files </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-75px mb-5">
                                            <img src="/assets/media/svg/files/folder-document.svg"
                                                class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/folder-document-dark.svg"
                                                class="theme-dark-show" alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            CRM Project </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        25 files </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->



                    </div>
                    <!--end:Row-->



                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">


                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/pdf.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/pdf-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            Project Reqs.. </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        3 days ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/doc.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/doc-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            CRM App Docs.. </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        3 days ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/css.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/css-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            User CRUD Styles </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        4 days ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/ai.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/ai-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            Product Logo </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        5 days ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->



                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/sql.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/sql-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            Orders backup </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        1 week ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/xml.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/xml-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            UTAIR CRM API Co.. </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        2 weeks ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <!--begin::Card-->
                            <div class="card h-100 ">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                    <!--begin::Name-->
                                    <a href="/../demo35/apps/file-manager/files.html"
                                        class="text-gray-800 text-hover-primary d-flex flex-column">
                                        <!--begin::Image-->
                                        <div class="symbol symbol-60px mb-5">
                                            <img src="/assets/media/svg/files/tif.svg" class="theme-light-show" alt="">
                                            <img src="/assets/media/svg/files/tif-dark.svg" class="theme-dark-show"
                                                alt="">

                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Title-->
                                        <div class="fs-5 fw-bold mb-2">
                                            Tower Hill App.. </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Name-->

                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-gray-400">
                                        3 weeks ago </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->



                    </div>
                    <!--end:Row-->


                    <!--begin::Modals-->
                    <!--begin::Modal - Offer A Deal-->
                    <div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-1000px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header py-7 d-flex justify-content-between">
                                    <!--begin::Modal title-->
                                    <h2>Offer a Deal</h2>
                                    <!--end::Modal title-->

                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <i class="ki-outline ki-cross fs-1"></i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y m-5">
                                    <!--begin::Stepper-->
                                    <div class="stepper stepper-links d-flex flex-column"
                                        id="kt_modal_offer_a_deal_stepper" data-kt-stepper="true">
                                        <!--begin::Nav-->
                                        <div class="stepper-nav justify-content-center py-2">
                                            <!--begin::Step 1-->
                                            <div class="stepper-item me-5 me-md-15 current"
                                                data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">
                                                    Deal Type
                                                </h3>
                                            </div>
                                            <!--end::Step 1-->

                                            <!--begin::Step 2-->
                                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">
                                                    Deal Details
                                                </h3>
                                            </div>
                                            <!--end::Step 2-->

                                            <!--begin::Step 3-->
                                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">
                                                    Finance Settings
                                                </h3>
                                            </div>
                                            <!--end::Step 3-->

                                            <!--begin::Step 4-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">
                                                    Completed
                                                </h3>
                                            </div>
                                            <!--end::Step 4-->
                                        </div>
                                        <!--end::Nav-->

                                        <!--begin::Form-->
                                        <form
                                            class="mx-auto mw-500px w-100 pt-15 pb-10 fv-plugins-bootstrap5 fv-plugins-framework"
                                            novalidate="novalidate" id="kt_modal_offer_a_deal_form">
                                            <!--begin::Type-->
                                            <div class="current" data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="mb-13">
                                                        <!--begin::Title-->
                                                        <h2 class="mb-3">Deal Type</h2>
                                                        <!--end::Title-->

                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-5">
                                                            If you need more info, please check out
                                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-15 fv-plugins-icon-container"
                                                        data-kt-buttons="true" data-kt-initialized="1">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" checked="checked"
                                                                name="offer_type" value="1">
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <span class="d-flex">
                                                                <!--begin::Icon-->
                                                                <i class="ki-outline ki-profile-circle fs-3hx"></i>
                                                                <!--end::Icon-->

                                                                <!--begin::Info-->
                                                                <span class="ms-4">
                                                                    <span
                                                                        class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal
                                                                        Deal</span>

                                                                    <span class="fw-semibold fs-4 text-muted">
                                                                        If you need more info, please check it out
                                                                    </span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="offer_type"
                                                                value="2">
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <span class="d-flex">
                                                                <!--begin::Icon-->
                                                                <i class="ki-outline ki-element-11 fs-3hx"></i>
                                                                <!--end::Icon-->

                                                                <!--begin::Info-->
                                                                <span class="ms-4">
                                                                    <span
                                                                        class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate
                                                                        Deal</span>

                                                                    <span class="fw-semibold fs-4 text-muted">
                                                                        Create corporate account to manage users
                                                                    </span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Option-->
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-lg btn-primary"
                                                            data-kt-element="type-next">
                                                            <span class="indicator-label">
                                                                Offer Details
                                                            </span>
                                                            <span class="indicator-progress">
                                                                Please wait... <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Type-->
                                            <!--begin::Details-->
                                            <div data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="mb-13">
                                                        <!--begin::Title-->
                                                        <h2 class="mb-3">Deal Details</h2>
                                                        <!--end::Title-->

                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-5">
                                                            If you need more info, please check out
                                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold mb-2">Customer</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            data-control="select2" data-placeholder="Select an option"
                                                            name="details_customer"
                                                            data-select2-id="select2-data-3-jbzp" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option></option>
                                                            <option value="1" selected=""
                                                                data-select2-id="select2-data-5-krfz">Keenthemes
                                                            </option>
                                                            <option value="2">CRM App</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-4-vnib"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-details_customer-6t-container"
                                                                    aria-controls="select2-details_customer-6t-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-details_customer-6t-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Keenthemes">Keenthemes</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                        <!--end::Input-->
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold mb-2">Deal Title</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Enter Deal Title" name="details_title"
                                                            value="Marketing Campaign">
                                                        <!--end::Input-->
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Deal Description</label>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <textarea class="form-control form-control-solid" rows="3"
                                                            placeholder="Enter Deal Description"
                                                            name="details_description">                Experience share market at your fingertips with TICK PRO stock investment mobile trading app
            </textarea>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label class="required fs-6 fw-semibold mb-2">Activation
                                                            Date</label>
                                                        <div class="position-relative d-flex align-items-center">
                                                            <!--begin::Icon-->
                                                            <i
                                                                class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                                            <!--end::Icon-->

                                                            <!--begin::Datepicker-->
                                                            <input
                                                                class="form-control form-control-solid ps-12 flatpickr-input"
                                                                placeholder="Pick date range"
                                                                name="details_activation_date" type="text"
                                                                readonly="readonly">
                                                            <!--end::Datepicker-->
                                                        </div>
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-15 fv-plugins-icon-container">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack">
                                                            <!--begin::Label-->
                                                            <div class="me-5">
                                                                <label
                                                                    class="required fs-6 fw-semibold">Notifications</label>
                                                                <div class="fs-7 fw-semibold text-muted">Allow
                                                                    Notifications by Phone or Email</div>
                                                            </div>
                                                            <!--end::Label-->

                                                            <!--begin::Checkboxes-->
                                                            <div class="d-flex">
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid me-10">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="checkbox" value="email"
                                                                        name="details_notifications[]">
                                                                    <!--end::Input-->

                                                                    <!--begin::Label-->
                                                                    <span class="form-check-label fw-semibold">
                                                                        Email
                                                                    </span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Checkbox-->

                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="checkbox" value="phone" checked=""
                                                                        name="details_notifications[]">
                                                                    <!--end::Input-->

                                                                    <!--begin::Label-->
                                                                    <span class="form-check-label fw-semibold">
                                                                        Phone
                                                                    </span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Checkbox-->
                                                            </div>
                                                            <!--end::Checkboxes-->
                                                        </div>
                                                        <!--begin::Wrapper-->
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Actions-->
                                                    <div class="d-flex flex-stack">
                                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                            data-kt-element="details-previous">
                                                            Deal Type
                                                        </button>

                                                        <button type="button" class="btn btn-lg btn-primary"
                                                            data-kt-element="details-next">
                                                            <span class="indicator-label">
                                                                Financing
                                                            </span>
                                                            <span class="indicator-progress">
                                                                Please wait... <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Budget-->
                                            <div data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="mb-13">
                                                        <!--begin::Title-->
                                                        <h2 class="mb-3">Finance</h2>
                                                        <!--end::Title-->

                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-5">
                                                            If you need more info, please check out
                                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                            <span class="required">Setup Budget</span>

                                                            <span class="lh-1 ms-1" data-bs-toggle="popover"
                                                                data-bs-trigger="hover" data-bs-html="true"
                                                                data-bs-content="
		<div class='p-4 rounded bg-light'>
			<div class='d-flex flex-stack text-muted mb-4'>
				<i class=&quot;ki-outline ki-bank fs-3 me-3&quot;></i>
				<div class='fw-bold'>INCBANK **** 1245 STATEMENT</div>
			</div>

			<div class='d-flex flex-stack fw-semibold text-gray-600'>
				<div>Amount</div>
				<div>Transaction</div>
			</div>

			<div class='separator separator-dashed my-2'></div>

			<div class='d-flex flex-stack text-dark fw-bold mb-2'>
				<div>USD345.00</div>
				<div>KEENTHEMES*</div>
			</div>

			<div class='d-flex flex-stack text-muted mb-2'>
				<div>USD75.00</div>
				<div>Hosting fee</div>
			</div>

			<div class='d-flex flex-stack text-muted'>
				<div>USD3,950.00</div>
				<div>Payrol</div>
			</div>
		</div>
	" data-kt-initialized="1">
                                                                <i
                                                                    class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Dialer-->
                                                        <div class="position-relative w-lg-250px"
                                                            id="kt_modal_finance_setup" data-kt-dialer="true"
                                                            data-kt-dialer-min="50" data-kt-dialer-max="50000"
                                                            data-kt-dialer-step="100" data-kt-dialer-prefix="$"
                                                            data-kt-dialer-decimals="2">

                                                            <!--begin::Decrease control-->
                                                            <button type="button"
                                                                class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                                data-kt-dialer-control="decrease">
                                                                <i class="ki-outline ki-minus-circle fs-1"></i>
                                                            </button>
                                                            <!--end::Decrease control-->

                                                            <!--begin::Input control-->
                                                            <input type="text"
                                                                class="form-control form-control-solid border-0 ps-12"
                                                                data-kt-dialer-control="input" placeholder="Amount"
                                                                name="finance_setup" readonly="" value="$50">
                                                            <!--end::Input control-->

                                                            <!--begin::Increase control-->
                                                            <button type="button"
                                                                class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                                data-kt-dialer-control="increase">
                                                                <i class="ki-outline ki-plus-circle fs-1"></i> </button>
                                                            <!--end::Increase control-->
                                                        </div>
                                                        <!--end::Dialer-->
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                                                        <!--end::Label-->

                                                        <!--begin::Row-->
                                                        <div class="row g-9" data-kt-buttons="true"
                                                            data-kt-buttons-target="[data-kt-button='true']"
                                                            data-kt-initialized="1">
                                                            <!--begin::Col-->
                                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                                <!--begin::Option-->
                                                                <label
                                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                                    data-kt-button="true">
                                                                    <!--begin::Radio-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="finance_usage" value="1"
                                                                            checked="checked">
                                                                    </span>
                                                                    <!--end::Radio-->

                                                                    <!--begin::Info-->
                                                                    <span class="ms-5">
                                                                        <span
                                                                            class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise
                                                                            Usage</span>

                                                                        <span class="fw-semibold fs-7 text-gray-600">
                                                                            Withdraw money to your bank account per
                                                                            transaction under $50,000 budget
                                                                        </span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </label>
                                                                <!--end::Option-->
                                                                <div
                                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                                <!--begin::Option-->
                                                                <label
                                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                                    data-kt-button="true">
                                                                    <!--begin::Radio-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="finance_usage" value="2">
                                                                    </span>
                                                                    <!--end::Radio-->

                                                                    <!--begin::Info-->
                                                                    <span class="ms-5">
                                                                        <span
                                                                            class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme
                                                                            Usage</span>
                                                                        <span class="fw-semibold fs-7 text-gray-600">
                                                                            Withdraw money to your bank account per
                                                                            transaction under $50,000 budget
                                                                        </span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-15 fv-plugins-icon-container">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack">
                                                            <!--begin::Label-->
                                                            <div class="me-5">
                                                                <label class="fs-6 fw-semibold">Allow Changes in
                                                                    Budget</label>
                                                                <div class="fs-7 fw-semibold text-muted">If you need
                                                                    more info, please check budget planning</div>
                                                            </div>
                                                            <!--end::Label-->

                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" name="finance_allow" checked="checked">
                                                                <span class="form-check-label fw-semibold text-muted">
                                                                    Allowed
                                                                </span>
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Actions-->
                                                    <div class="d-flex flex-stack">
                                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                            data-kt-element="finance-previous">
                                                            Project Settings
                                                        </button>

                                                        <button type="button" class="btn btn-lg btn-primary"
                                                            data-kt-element="finance-next">
                                                            <span class="indicator-label">
                                                                Build Team
                                                            </span>
                                                            <span class="indicator-progress">
                                                                Please wait... <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Budget-->
                                            <!--begin::Complete-->
                                            <div data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="mb-13">
                                                        <!--begin::Title-->
                                                        <h2 class="mb-3">Deal Created!</h2>
                                                        <!--end::Title-->

                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-5">
                                                            If you need more info, please check out
                                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Actions-->
                                                    <div class="d-flex flex-center pb-20">
                                                        <button type="button" class="btn btn-lg btn-light me-3"
                                                            data-kt-element="complete-start">
                                                            Create New Deal
                                                        </button>

                                                        <a href="#" class="btn btn-lg btn-primary"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-original-title="Coming Soon"
                                                            data-kt-initialized="1">
                                                            View Deal
                                                        </a>
                                                    </div>
                                                    <!--end::Actions-->

                                                    <!--begin::Illustration-->
                                                    <div class="text-center px-4">
                                                        <img src="/assets/media/illustrations/sketchy-1/20.png" alt=""
                                                            class="mw-100 mh-300px">
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                            </div>
                                            <!--end::Complete-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Stepper-->
                                </div>
                                <!--begin::Modal body-->
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - Offer A Deal-->
                    <!--end::Modals-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->


            <!--begin::Footer-->
            <div id="kt_app_footer"
                class="app-footer  align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6 ">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023©</span>
                    <a href="https://keenthemes.com" target="_blank"
                        class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->

                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                            class="menu-link px-2">About</a></li>

                    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                            class="menu-link px-2">Support</a></li>

                    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                            class="menu-link px-2">Purchase</a></li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->


    </div>
    <!--end::Wrapper container-->
</div>