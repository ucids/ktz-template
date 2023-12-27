<? 
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // El usuario no ha iniciado sesión, redirige a la página de inicio de sesión o muestra un mensaje de error
    header("Location: admin/login.php");
    exit();
}
?>
<div id="kt_app_content" class="app-content  flex-column-fluid ">
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="assets/media/ktz/cow1.png" alt="image">
                        <div
                            class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                        </div>
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
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
                                    <? echo $full_name; ?>
                                </a>
                                <a href="#"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
                            </div>
                            <!--end::Name-->

                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#"
                                    class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-profile-circle fs-4 me-1"></i>
                                    <? echo $nombreDepartamento; ?>
                                </a>
                                <a href="#"
                                    class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-geolocation fs-4 me-1"></i>
                                    Tijuana
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                    <i class="ki-outline ki-sms fs-4"></i>
                                    <? echo $email; ?>
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
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                            data-kt-initialized="1">500</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-500">Solicitudes</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="80" data-kt-initialized="1">80</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-500">Projects</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->

                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="60" data-kt-countup-prefix="%"
                                            data-kt-initialized="1">%60</div>
                                    </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Progress-->
                        <!-- <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                                <span class="fw-bold fs-6">50%</span>
                            </div>

                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div> -->
                        <!--end::Progress-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->

            <!--begin::Navs-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/overview.html">
                        Overview </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/settings.html">
                        Settings </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/security.html">
                        Security </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/activity.html">
                        Activity </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/billing.html">
                        Billing </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                        href="/metronic8/demo35/../demo35/account/statements.html">
                        Statements </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/referrals.html">
                        Referrals </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/api-keys.html">
                        API Keys </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                        href="/metronic8/demo35/../demo35/account/logs.html">
                        Logs </a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::Row-->
    <div class="row g-xxl-9">
        <!--begin::Col-->
        <div class="col-xxl-8">
            <!--begin::Earnings-->
            <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">
                        <h3>Resumen</h3>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pb-0">
                    <span class="fs-5 fw-semibold text-gray-600 pb-5 d-block">
                        Resumen de los gastos de el ultimo mes
                    </span>

                    <!--begin::Left Section-->
                    <div class="d-flex flex-wrap justify-content-between pb-6">
                        <!--begin::Row-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Col-->
                            <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                <span class="fs-2x fw-bold text-gray-800 lh-1">
                                    <span data-kt-countup="true" data-kt-countup-value="6,840"
                                        data-kt-countup-prefix="$" class="counted" data-kt-initialized="1">$6,840</span>
                                </span>
                                <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2">Gastos</span>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                <span class="fs-2x fw-bold text-gray-800 lh-1">
                                    <span class="counted" data-kt-countup="true" data-kt-countup-value="80"
                                        data-kt-initialized="1">80</span>%
                                </span>
                                <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2">Change</span>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                <span class="fs-2x fw-bold text-gray-800 lh-1">
                                    <span data-kt-countup="true" data-kt-countup-value="1,240"
                                        data-kt-countup-prefix="$" class="counted" data-kt-initialized="1">$1,240</span>
                                </span>
                                <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2">Fees</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <a href="#" class="btn btn-primary  px-6 flex-shrink-0 align-self-center">Withdraw Earnings</a>
                    </div>
                    <!--end::Left Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Earnings-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4">
            <!--begin::Invoices-->
            <div class="card  card-xxl-stretch mb-5 mb-xxl-10">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="text-gray-800">Invoices</h3>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body">
                    <span class="fs-5 fw-semibold text-gray-600 pb-6 d-block">Download apart from order of the good
                        awesome invoice topics</span>

                    <!--begin::Left Section-->
                    <div class="d-flex align-self-center">
                        <div class="flex-grow-1 me-3">
                            <!--begin::Select-->
                            <select class="form-select form-select-solid select2-hidden-accessible"
                                data-control="select2" data-placeholder="Seller Annual Fee" data-hide-search="true"
                                data-select2-id="select2-data-3-24ir" tabindex="-1" aria-hidden="true"
                                data-kt-initialized="1">
                                <option value="" data-select2-id="select2-data-5-9e71"></option>
                                <option value="1">Individual Seller Account</option>
                                <option value="2">Variable Closing Fee</option>
                                <option value="3">Minimum Referral Fee</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-4-ebsp" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-olvy-container"
                                        aria-controls="select2-olvy-container"><span class="select2-selection__rendered"
                                            id="select2-olvy-container" role="textbox" aria-readonly="true"
                                            title="Seller Annual Fee"><span
                                                class="select2-selection__placeholder">Seller Annual
                                                Fee</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!--end::Select-->
                        </div>

                        <!--begin::Action-->
                        <button type="button" class="btn btn-primary btn-icon flex-shrink-0">
                            <i class="ki-outline ki-arrow-down fs-1"></i> </button>
                        <!--end::Action-->
                    </div>
                    <!--end::Left Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Invoices-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->


    <!--begin::Statements-->
    <div class="card  ">
        <!--begin::Header-->
        <div class="card-header card-header-stretch">
            <!--begin::Title-->
            <div class="card-title">
                <h3 class="m-0 text-gray-800">Solicitudes</h3>
            </div>
            <!--end::Title-->

            <!--begin::Toolbar-->
            <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab"
                            role="tab" href="#kt_referrals_1" aria-selected="true" tabindex="-1">
                            Mis Solicitudes
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_2019_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab"
                            role="tab" href="#kt_referrals_2" aria-selected="false" tabindex="-1">
                            Solicitudes por Aprobar </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_2018_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab"
                            role="tab" href="#kt_referrals_3" aria-selected="false" tabindex="-1">
                            Entregadas </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a id="kt_referrals_2017_tab" class="nav-link text-active-gray-800 ms-8"
                            data-bs-toggle="tab" role="tab" href="#kt_referrals_4" aria-selected="false">
                             Rechazadas</a>
                    </li>
                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->

        <!--begin::Tab Content-->
        <div id="kt_referred_users_tab_content" class="tab-content">
            <!--begin::Tab panel-->
            <div id="kt_referrals_1" class="card-body p-0 tab-pane fade" role="tabpanel"
                aria-labelledby="kt_referrals_year_tab">
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Thead-->
                        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                            <tr>
                                <th class="min-w-175px ps-9">Date</th>
                                <th class="min-w-150px px-0">Order ID</th>
                                <th class="min-w-350px">Details</th>
                                <th class="min-w-125px">Amount</th>
                                <th class="min-w-125px text-center">Invoice</th>
                            </tr>
                        </thead>
                        <!--end::Thead-->

                        <!--begin::Tbody-->
                        <tbody class="fs-6 fw-semibold text-gray-600">
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">102445788</td>
                                <td>Darknight transparency 36 Icons Pack</td>
                                <td class="text-success">$38.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 24, 2020</td>
                                <td class="ps-0">423445721</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-2.60</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 08, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Cartoon Mobile Emoji Phone Pack</td>
                                <td class="text-success">$76.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Sep 15, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                <td class="text-success">$5.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">May 30, 2020</td>
                                <td class="ps-0">523445943</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-1.30</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Apr 22, 2020</td>
                                <td class="ps-0">231445943</td>
                                <td>Parcel Shipping / Delivery Service App</td>
                                <td class="text-success">$204.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Feb 09, 2020</td>
                                <td class="ps-0">426445943</td>
                                <td>Visual Design Illustration</td>
                                <td class="text-success">$31.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">984445943</td>
                                <td>Abstract Vusial Pack</td>
                                <td class="text-success">$52.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Jan 04, 2020</td>
                                <td class="ps-0">324442313</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-0.80</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>

                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div id="kt_referrals_2" class="card-body p-0 tab-pane fade" role="tabpanel"
                aria-labelledby="kt_referrals_2019_tab">
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Thead-->
                        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                            <tr>
                                <th class="min-w-175px ps-9">Date</th>
                                <th class="min-w-150px px-0">Order ID</th>
                                <th class="min-w-350px">Details</th>
                                <th class="min-w-125px">Amount</th>
                                <th class="min-w-125px text-center">Invoice</th>
                            </tr>
                        </thead>
                        <!--end::Thead-->

                        <!--begin::Tbody-->
                        <tbody class="fs-6 fw-semibold text-gray-600">
                            <tr>
                                <td class="ps-9">May 30, 2020</td>
                                <td class="ps-0">523445943</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-1.30</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Apr 22, 2020</td>
                                <td class="ps-0">231445943</td>
                                <td>Parcel Shipping / Delivery Service App</td>
                                <td class="text-success">$204.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Feb 09, 2020</td>
                                <td class="ps-0">426445943</td>
                                <td>Visual Design Illustration</td>
                                <td class="text-success">$31.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">984445943</td>
                                <td>Abstract Vusial Pack</td>
                                <td class="text-success">$52.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Jan 04, 2020</td>
                                <td class="ps-0">324442313</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-0.80</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">102445788</td>
                                <td>Darknight transparency 36 Icons Pack</td>
                                <td class="text-success">$38.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 24, 2020</td>
                                <td class="ps-0">423445721</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-2.60</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 08, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Cartoon Mobile Emoji Phone Pack</td>
                                <td class="text-success">$76.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Sep 15, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                <td class="text-success">$5.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>

                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div id="kt_referrals_3" class="card-body p-0 tab-pane fade" role="tabpanel"
                aria-labelledby="kt_referrals_2018_tab">
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Thead-->
                        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                            <tr>
                                <th class="min-w-175px ps-9">Date</th>
                                <th class="min-w-150px px-0">Order ID</th>
                                <th class="min-w-350px">Details</th>
                                <th class="min-w-125px">Amount</th>
                                <th class="min-w-125px text-center">Invoice</th>
                            </tr>
                        </thead>
                        <!--end::Thead-->

                        <!--begin::Tbody-->
                        <tbody class="fs-6 fw-semibold text-gray-600">
                            <tr>
                                <td class="ps-9">Feb 09, 2020</td>
                                <td class="ps-0">426445943</td>
                                <td>Visual Design Illustration</td>
                                <td class="text-success">$31.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">984445943</td>
                                <td>Abstract Vusial Pack</td>
                                <td class="text-success">$52.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Jan 04, 2020</td>
                                <td class="ps-0">324442313</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-0.80</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Sep 15, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                <td class="text-success">$5.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">102445788</td>
                                <td>Darknight transparency 36 Icons Pack</td>
                                <td class="text-success">$38.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 24, 2020</td>
                                <td class="ps-0">423445721</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-2.60</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 08, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Cartoon Mobile Emoji Phone Pack</td>
                                <td class="text-success">$76.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">May 30, 2020</td>
                                <td class="ps-0">523445943</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-1.30</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Apr 22, 2020</td>
                                <td class="ps-0">231445943</td>
                                <td>Parcel Shipping / Delivery Service App</td>
                                <td class="text-success">$204.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>

                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div id="kt_referrals_4" class="card-body p-0 tab-pane fade active show" role="tabpanel"
                aria-labelledby="kt_referrals_2017_tab">
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                        <!--begin::Thead-->
                        <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                            <tr>
                                <th class="min-w-175px ps-9">Date</th>
                                <th class="min-w-150px px-0">Order ID</th>
                                <th class="min-w-350px">Details</th>
                                <th class="min-w-125px">Amount</th>
                                <th class="min-w-125px text-center">Invoice</th>
                            </tr>
                        </thead>
                        <!--end::Thead-->

                        <!--begin::Tbody-->
                        <tbody class="fs-6 fw-semibold text-gray-600">
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">102445788</td>
                                <td>Darknight transparency 36 Icons Pack</td>
                                <td class="text-success">$38.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 24, 2020</td>
                                <td class="ps-0">423445721</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-2.60</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">102445788</td>
                                <td>Darknight transparency 36 Icons Pack</td>
                                <td class="text-success">$38.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 24, 2020</td>
                                <td class="ps-0">423445721</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-2.60</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Feb 09, 2020</td>
                                <td class="ps-0">426445943</td>
                                <td>Visual Design Illustration</td>
                                <td class="text-success">$31.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Nov 01, 2020</td>
                                <td class="ps-0">984445943</td>
                                <td>Abstract Vusial Pack</td>
                                <td class="text-success">$52.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Jan 04, 2020</td>
                                <td class="ps-0">324442313</td>
                                <td>Seller Fee</td>
                                <td class="text-danger">$-0.80</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 08, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Cartoon Mobile Emoji Phone Pack</td>
                                <td class="text-success">$76.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>
                            <tr>
                                <td class="ps-9">Oct 08, 2020</td>
                                <td class="ps-0">312445984</td>
                                <td>Cartoon Mobile Emoji Phone Pack</td>
                                <td class="text-success">$76.00</td>
                                <td class="text-center"><button
                                        class="btn btn-light btn-sm btn-active-light-primary">Download</button></td>
                            </tr>

                        </tbody>
                        <!--end::Tbody-->
                    </table>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Tab panel-->

        </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Statements-->
</div>