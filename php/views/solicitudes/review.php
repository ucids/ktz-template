<?
ini_set('display_errors', 1);
error_reporting(E_ALL);
$solicitudId = $_GET['solicitud'];
$smt = $pdo->prepare("SELECT * FROM View_Solicitudes WHERE id = :id");
$smt->bindParam(':id', $solicitudId);
$smt->execute();
$solicitud = $smt->fetch(PDO::FETCH_ASSOC);
$usuario = $solicitud['usuario'].' '.$solicitud['lastname'];
$emai = $solicitud['email'];
$departamento = $solicitud['departamento'];
$tipo = $solicitud['tipo'];
$proveedor = $solicitud['nombre_proveedor'];
$motivo = $solicitud['motivo'];
$fecha = $solicitud['created_at'];
$articulos = $solicitud['cantidad_articulos'];
$estado = $solicitud['estado'];
$color = $solicitud['color'];
$categoria = $solicitud['nombre_categoria'];
$currency = $solicitud['currency'];
$address = $solicitud['address'];
?>
<!--begin::Layout-->
<!--begin::Card-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Card body-->
    <div class="card-body pt-15">
        <!--begin::Summary-->
        <div class="d-flex flex-center flex-column mb-5">
            <!--begin::Avatar-->
            <div class="symbol symbol-150px symbol-circle mb-7">
                <img src="assets/media/ktz/cow1.png" alt="image">
            </div>
            <!--end::Avatar-->

            <!--begin::Name-->
            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">
                <? echo $usuario;?>
            </a>
            <!--end::Name-->

            <!--begin::Email-->
            <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">
                <? echo $email;?>
            </a>
            <!--end::Email-->
        </div>
        <!--end::Summary-->

        <!--begin::Details toggle-->
        <div class="d-flex flex-stack fs-4 py-3">
            <div class="fw-bold">
                Detalles
            </div>

            <!--begin::Badge-->
            <div class="badge badge-light-<?echo $color;?> d-inline">
                <? echo $estado;?>
            </div>
            <!--begin::Badge-->
        </div>
        <!--end::Details toggle-->

        <div class="separator separator-dashed my-3"></div>

        <!--begin::Details content-->
        <div class="pb-5 fs-6">
            <!--begin::Details item-->
            <div class="fw-bold mt-5">Departamento</div>
            <div class="text-gray-600">
                <?echo $departamento;?>
            </div>
            <!--begin::Details item-->
            <!--begin::Details item-->
            <div class="fw-bold mt-5">Tipo Solicitud</div>
            <div class="text-gray-600"><a href="#" class="text-gray-600 text-hover-primary">
                    <? echo strtoupper($tipo);?>
                </a></div>
            <!--begin::Details item-->
            <!--begin::Details item-->
            <div class="fw-bold mt-5">Fecha de Solicitud</div>
            <div class="text-gray-600">
                <? $fechaObj = new DateTime($fecha);
                                echo $fechaObj->format('d-M-Y H:i');
                                ?>
            </div>
            <!--begin::Details item-->
            <!--begin::Details item-->
            <div class="fw-bold mt-5">Divisa</div>
            <div class="text-gray-600">
                <? echo strtoupper($currency)?>
            </div>
            <!--begin::Details item-->
            <!--begin::Details item-->
            <?if ($tipo =='tj'){?>
            <div class="fw-bold mt-5">Shipping Address</div>
            <div class="text-gray-600"><a href="#" class="text-gray-600 text-hover-primary">
                    <? echo $address;?>
                </a> </div>
            <?}?>
            <!--begin::Details item-->
        </div>
        <!--end::Details content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
</div>
<!--end::Sidebar-->

<!--begin::Content-->
<div class="flex-lg-row-fluid ms-lg-15">
    <!--begin:::Tabs-->
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
        <!--begin:::Tab item-->
        <li class="nav-item" role="presentation">
            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                href="#kt_ecommerce_customer_overview" aria-selected="true" role="tab">Overview</a>
        </li>
        <!--end:::Tab item-->

        <!--begin:::Tab item-->
        <li class="nav-item" role="presentation">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_general"
                aria-selected="false" role="tab" tabindex="-1">General
                Settings</a>
        </li>
        <!--end:::Tab item-->

        <!--begin:::Tab item-->
        <li class="nav-item" role="presentation">
            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_advanced"
                aria-selected="false" role="tab" tabindex="-1">Advanced Settings</a>
        </li>
        <!--end:::Tab item-->
    </ul>
    <!--end:::Tabs-->

    <!--begin:::Tab content-->
    <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade active show" id="kt_ecommerce_customer_overview" role="tabpanel">
            <div class="row row-cols-1 row-cols-md-2 mb-6 mb-xl-9">
                <div class="col">
                    <!--begin::Card-->
                    <div class="card pt-4 h-md-100 mb-6 mb-md-0">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bold">Presupuesto</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="fw-bold fs-2">
                                <div class="d-flex">
                                    <i class="ki-outline ki-dollar text-info fs-2x"></i>
                                    <div class="ms-2">
                                        <? echo '$93939'?> <span class="text-muted fs-4 fw-semibold">Disponibles</span>
                                    </div>
                                </div>
                                <div class="fs-7 fw-normal text-muted">Earn reward points with every
                                    purchase.</div>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>

                <div class="col">
                    <!--begin::Reward Tier-->
                    <a href="#" class="card bg-info hoverable h-md-100">
                        <!--begin::Body-->
                        <div class="card-body">
                            <i class="ki-outline ki-award text-white fs-3x ms-n1"></i>
                            <div class="text-white fw-bold fs-2 mt-5">
                                <? echo $departamento; ?>
                            </div>

                            <div class="fw-semibold text-white">
                                <? echo $categoria; ?>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Reward Tier-->
                </div>
            </div>


            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Articulos de la Solicitud</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Order #
                                <?echo $solicitudId?>
                            </h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <? // Preparar la sentencia SQL
                                    $stmt = $pdo->prepare("SELECT * FROM articulos WHERE solicitud_id = :solicitud_id");

                                    // Vincular el ID de la solicitud a la sentencia SQL
                                    $stmt->bindParam(':solicitud_id', $solicitudId);

                                    // Ejecutar la sentencia SQL
                                    $stmt->execute();

                                    // Recuperar los resultados de la consulta
                                    $articulos = $stmt->fetchAll();
                                ?>
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="table-responsive mb-8">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-175px">Numero de Parte</th>
                                        <th class="min-w-100px text-end">Unidad</th>
                                        <th class="min-w-70px text-end">Cantidad</th>
                                        <th class="min-w-100px text-end">Precio por Unidad</th>
                                        <th class="min-w-100px text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <?foreach ($articulos as $articulo) {?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="#" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url(assets/media/ktz/cow.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <!--begin::Title-->
                                                <div class="ms-5">
                                                    <a href="/metronic8/demo35/../demo35/apps/ecommerce/catalog/edit-product.html"
                                                        class="fw-bold text-gray-600 text-hover-primary">
                                                        <? echo $articulo['numero_parte'];?>
                                                    </a>
                                                    <div class="fs-7 text-muted">
                                                        <? echo $articulo['descripcion'];?>
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <?echo $articulo['unidad']?>
                                        </td>
                                        <td class="text-end">
                                            <? echo $articulo['cantidad']?>
                                        </td>
                                        <td class="text-end">
                                            $
                                            <? echo $articulo['precio']?>
                                        </td>
                                        <td class="text-end">
                                            $
                                            <? echo number_format($articulo['precio']*$articulo['cantidad'],2)?>
                                        </td>
                                    </tr>
                                    <? } ?>
                                    <tr>
                                        <td colspan="4" class="fs-3 text-gray-900 text-end">
                                            Grand Total
                                        </td>
                                        <?// Preparar la sentencia SQL
                                                        $stmt = $pdo->prepare("SELECT SUM(precio * cantidad) AS total_precio FROM articulos WHERE solicitud_id = :solicitud_id");

                                                        // Vincular el ID de la solicitud a la sentencia SQL
                                                        $stmt->bindParam(':solicitud_id', $solicitudId);

                                                        // Ejecutar la sentencia SQL
                                                        $stmt->execute();

                                                        // Recuperar el resultado de la consulta
                                                        $result = $stmt->fetch(); ?>
                                        <td class="text-gray-900 fs-3 fw-bolder text-end">
                                            <?echo "$" . number_format($result['total_precio'], 2, '.', ',');?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <div class="text-end ms-2">
                            <a href="#"
                                class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger fs-3"
                                data-solicitud-id="<?php echo $solicitudId; ?>"
                                data-action="rechazar">Rechazar</a>

                            <a href="#"
                                class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success fs-3 ms-7"
                                data-solicitud-id="<?php echo $solicitudId; ?>"
                                data-action="aprobar">Aprobar</a>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end:::Tab pane-->

        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_customer_general" role="tabpanel">
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Profile</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0 pb-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#"
                        id="kt_ecommerce_customer_profile">
                        <!--begin::Input group-->
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span>Update Avatar</span>

                                <span class="ms-1" data-bs-toggle="tooltip"
                                    aria-label="Allowed file types: png, jpg, jpeg."
                                    data-bs-original-title="Allowed file types: png, jpg, jpeg."
                                    data-kt-initialized="1">
                                    <i class="ki-outline ki-information fs-7"></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Image input wrapper-->
                            <div class="mt-1">
                                <!--begin::Image input placeholder-->
                                <style>
                                .image-input-placeholder {
                                    background-image: url('/metronic8/demo35/assets/media/svg/files/blank-image.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('/metronic8/demo35/assets/media/svg/files/blank-image-dark.svg');
                                }
                                </style>
                                <!--end::Image input placeholder-->

                                <!--begin::Image input-->
                                <div class="image-input image-input-outline image-input-placeholder"
                                    data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url(/metronic8/demo35/assets/media/avatars/300-1.jpg)">
                                    </div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Edit-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        aria-label="Change avatar" data-bs-original-title="Change avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-pencil fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                            </div>
                            <!--end::Image input wrapper-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2 required">Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="name"
                                value="Max Smith">
                            <!--end::Input-->
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-md-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span class="required">General Email</span>

                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            aria-label="Email address must be active"
                                            data-bs-original-title="Email address must be active"
                                            data-kt-initialized="1">
                                            <i class="ki-outline ki-information fs-7"></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" placeholder=""
                                        name="gen_email" value="max@kt.com">
                                    <!--end::Input-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>Billing Email</span>

                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            aria-label="Email address must be active"
                                            data-bs-original-title="Email address must be active"
                                            data-kt-initialized="1">
                                            <i class="ki-outline ki-information fs-7"></i> </span>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" placeholder=""
                                        name="bill_email" value="info@keenthemes.com">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_customer_profile_submit"
                                class="btn btn-light-primary">
                                <span class="indicator-label">
                                    Save
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Address Book</h2>
                    </div>
                    <!--end::Card title-->


                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_address">
                            <i class="ki-outline ki-plus-square fs-3"></i> Add new address
                        </a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div id="kt_ecommerce_customer_addresses" class="card-body pt-0 pb-5">
                    <div class="accordion accordion-icon-toggle" id="kt_ecommerce_customer_addresses_accordion">
                        <!--begin::Addresses-->
                        <!--begin::Address-->
                        <div class="py-0">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="accordion-header d-flex align-items-center collapsible collapsed rotate"
                                    data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_1" role="button"
                                    aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                                    <!--begin::Arrow-->
                                    <div class="accordion-icon me-3">
                                        <i class="ki-outline ki-right fs-4"></i>
                                    </div>
                                    <!--end::Arrow-->

                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">
                                                Home </div>

                                            <div class="badge badge-light-primary ms-5">Default Address
                                            </div>
                                        </div>
                                        <div class="text-muted">101 Collin Street</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->

                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit"
                                            data-bs-original-title="Edit" data-kt-initialized="1">
                                            <i class="ki-outline ki-pencil fs-3"></i> </span>
                                    </a>
                                    <!--end::Edit-->

                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="tooltip" data-kt-customer-payment-method="delete"
                                        aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                        <i class="ki-outline ki-trash fs-3"></i> </a>
                                    <!--end::Delete-->

                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-bs-toggle="tooltip" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" aria-label="More Options"
                                        data-bs-original-title="More Options" data-kt-initialized="1">
                                        <i class="ki-outline ki-setting-3 fs-3"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-payment-mehtod-action="set_as_default">
                                                Set as default address
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_ecommerce_customer_addresses_1" class="collapse fs-6 ps-9"
                                data-bs-parent="#kt_ecommerce_customer_addresses_accordion">
                                <!--begin::Details-->
                                <div class="d-flex flex-column pb-5">
                                    <div class="fw-bold text-gray-600">
                                        Max Smith </div>
                                    <div class="text-muted">
                                        101 Collin Street,<br>
                                        Melbourne, VIC 3000,<br>
                                        Australia </div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Address-->
                        <!--begin::Address-->
                        <div class="py-0">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="accordion-header d-flex align-items-center collapsible collapsed rotate"
                                    data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_2" role="button"
                                    aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
                                    <!--begin::Arrow-->
                                    <div class="accordion-icon me-3">
                                        <i class="ki-outline ki-right fs-4"></i>
                                    </div>
                                    <!--end::Arrow-->

                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">
                                                Work </div>

                                        </div>
                                        <div class="text-muted">54 Spring Street</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->

                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit"
                                            data-bs-original-title="Edit" data-kt-initialized="1">
                                            <i class="ki-outline ki-pencil fs-3"></i> </span>
                                    </a>
                                    <!--end::Edit-->

                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="tooltip" data-kt-customer-payment-method="delete"
                                        aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                        <i class="ki-outline ki-trash fs-3"></i> </a>
                                    <!--end::Delete-->

                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-bs-toggle="tooltip" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" aria-label="More Options"
                                        data-bs-original-title="More Options" data-kt-initialized="1">
                                        <i class="ki-outline ki-setting-3 fs-3"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-payment-mehtod-action="set_as_default">
                                                Set as default address
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_ecommerce_customer_addresses_2" class="collapse fs-6 ps-9"
                                data-bs-parent="#kt_ecommerce_customer_addresses_accordion">
                                <!--begin::Details-->
                                <div class="d-flex flex-column pb-5">
                                    <div class="fw-bold text-gray-600">
                                        Max Smith </div>
                                    <div class="text-muted">
                                        54 Spring Street,<br>
                                        Melbourne, VIC 3000,<br>
                                        Australia </div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Address-->
                        <!--begin::Address-->
                        <div class="py-0">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="accordion-header d-flex align-items-center collapsible collapsed rotate"
                                    data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_3" role="button"
                                    aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
                                    <!--begin::Arrow-->
                                    <div class="accordion-icon me-3">
                                        <i class="ki-outline ki-right fs-4"></i>
                                    </div>
                                    <!--end::Arrow-->

                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">
                                                Family </div>

                                        </div>
                                        <div class="text-muted">1521 Broadway</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->

                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit"
                                            data-bs-original-title="Edit" data-kt-initialized="1">
                                            <i class="ki-outline ki-pencil fs-3"></i> </span>
                                    </a>
                                    <!--end::Edit-->

                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="tooltip" data-kt-customer-payment-method="delete"
                                        aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                        <i class="ki-outline ki-trash fs-3"></i> </a>
                                    <!--end::Delete-->

                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-bs-toggle="tooltip" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" aria-label="More Options"
                                        data-bs-original-title="More Options" data-kt-initialized="1">
                                        <i class="ki-outline ki-setting-3 fs-3"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-payment-mehtod-action="set_as_default">
                                                Set as default address
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_ecommerce_customer_addresses_3" class="collapse fs-6 ps-9"
                                data-bs-parent="#kt_ecommerce_customer_addresses_accordion">
                                <!--begin::Details-->
                                <div class="d-flex flex-column pb-5">
                                    <div class="fw-bold text-gray-600">
                                        Francis Mitcham </div>
                                    <div class="text-muted">
                                        1521 Broadway,<br>
                                        New York,<br>
                                        Melbourne, NY 10036,<br>
                                        United States </div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Address-->
                        <!--end::Addresses-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end:::Tab pane-->

        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="kt_ecommerce_customer_advanced" role="tabpanel">
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Security Details</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0 pb-5">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>Phone</td>
                                    <td>+6141 234 567</td>
                                    <td class="text-end">
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_update_phone">
                                            <i class="ki-outline ki-pencil fs-3"></i> </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Password</td>
                                    <td>******</td>
                                    <td class="text-end">
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                            <i class="ki-outline ki-pencil fs-3"></i> </button>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2 class="mb-1">Two Step Authentication</h2>

                        <div class="fs-6 fw-semibold text-muted">Keep your account extra secure with a
                            second authentication step.</div>
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add-->
                        <button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-outline ki-fingerprint-scanning fs-3"></i> Add Authentication Step
                        </button>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_auth_app">
                                    Use authenticator app
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_one_time_password">
                                    Enable one-time password
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Add-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pb-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Content-->
                        <div class="d-flex flex-column">
                            <span>SMS</span>
                            <span class="text-muted fs-6">+6141 234 567</span>
                        </div>
                        <!--end::Content-->

                        <!--begin::Action-->
                        <div class="d-flex justify-content-end align-items-center">
                            <!--begin::Button-->
                            <button type="button"
                                class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                <i class="ki-outline ki-pencil fs-3"></i> </button>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                id="kt_users_delete_two_step">
                                <i class="ki-outline ki-trash fs-3"></i> </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Item-->

                    <!--begin:Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end:Separator-->

                    <!--begin::Disclaimer-->
                    <div class="text-gray-600">
                        If you lose your mobile device or security key, you can <a href="#" class="me-1">generate a
                            backup code</a> to sign in to your account.
                    </div>
                    <!--end::Disclaimer-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

            <!--begin::Card-->
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bold mb-0">Payment Methods</h2>
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_new_card">
                            <i class="ki-outline ki-plus-square fs-3"></i> Add new method
                        </a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div id="kt_customer_view_payment_method" class="card-body pt-0">
                    <div class="accordion accordion-icon-toggle" id="kt_customer_view_payment_method_accordion">
                        <!--begin::Option-->
                        <div class="py-0" data-kt-customer-payment-method="row">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="accordion-header d-flex align-items-center " data-bs-toggle="collapse"
                                    href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false"
                                    aria-controls="kt_customer_view_payment_method_1">
                                    <!--begin::Arrow-->
                                    <div class="accordion-icon me-2">
                                        <i class="ki-outline ki-right fs-4"></i>
                                    </div>
                                    <!--end::Arrow-->

                                    <!--begin::Logo-->
                                    <img src="/metronic8/demo35/assets/media/svg/card-logos/mastercard.svg"
                                        class="w-40px me-3" alt="">
                                    <!--end::Logo-->

                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-gray-800 fw-bold">
                                                Mastercard </div>

                                            <div class="badge badge-light-primary ms-5">Primary</div>
                                        </div>
                                        <div class="text-muted">Expires Dec 2024</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->

                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit"
                                            data-bs-original-title="Edit" data-kt-initialized="1">
                                            <i class="ki-outline ki-pencil fs-3"></i> </span>
                                    </a>
                                    <!--end::Edit-->

                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="tooltip" data-kt-customer-payment-method="delete"
                                        aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                        <i class="ki-outline ki-trash fs-3"></i> </a>
                                    <!--end::Delete-->

                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-bs-toggle="tooltip" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" aria-label="More Options"
                                        data-bs-original-title="More Options" data-kt-initialized="1">
                                        <i class="ki-outline ki-setting-3 fs-3"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-payment-mehtod-action="set_as_primary">
                                                Set as Primary
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10"
                                data-bs-parent="#kt_customer_view_payment_method_accordion">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap py-5">
                                    <!--begin::Col-->
                                    <div class="flex-equal me-5">
                                        <table class="table table-flush fw-semibold gy-1">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Name</td>
                                                    <td class="text-gray-800">Emma Smith</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Number</td>
                                                    <td class="text-gray-800">**** 9418</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Expires</td>
                                                    <td class="text-gray-800">12/2024</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Type</td>
                                                    <td class="text-gray-800">Mastercard credit card</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                    <td class="text-gray-800">VICBANK</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">ID</td>
                                                    <td class="text-gray-800">id_4325df90sdf8</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="flex-equal ">
                                        <table class="table table-flush fw-semibold gy-1">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Billing
                                                        address</td>
                                                    <td class="text-gray-800">AU</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Phone</td>
                                                    <td class="text-gray-800">No phone provided</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Email</td>
                                                    <td class="text-gray-800"><a href="#"
                                                            class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Origin</td>
                                                    <td class="text-gray-800">Australia <div
                                                            class="symbol symbol-20px symbol-circle ms-2">
                                                            <img
                                                                src="/metronic8/demo35/assets/media/flags/australia.svg">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">CVC check
                                                    </td>
                                                    <td class="text-gray-800">Passed <i
                                                            class="ki-outline ki-check-circle fs-2 text-success"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Option-->

                        <div class="separator separator-dashed"></div>
                        <!--begin::Option-->
                        <div class="py-0" data-kt-customer-payment-method="row">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="accordion-header d-flex align-items-center collapsed"
                                    data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button"
                                    aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
                                    <!--begin::Arrow-->
                                    <div class="accordion-icon me-2">
                                        <i class="ki-outline ki-right fs-4"></i>
                                    </div>
                                    <!--end::Arrow-->

                                    <!--begin::Logo-->
                                    <img src="/metronic8/demo35/assets/media/svg/card-logos/visa.svg"
                                        class="w-40px me-3" alt="">
                                    <!--end::Logo-->

                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-gray-800 fw-bold">
                                                Visa </div>

                                        </div>
                                        <div class="text-muted">Expires Feb 2022</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->

                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit"
                                            data-bs-original-title="Edit" data-kt-initialized="1">
                                            <i class="ki-outline ki-pencil fs-3"></i> </span>
                                    </a>
                                    <!--end::Edit-->

                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="tooltip" data-kt-customer-payment-method="delete"
                                        aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                        <i class="ki-outline ki-trash fs-3"></i> </a>
                                    <!--end::Delete-->

                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-bs-toggle="tooltip" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" aria-label="More Options"
                                        data-bs-original-title="More Options" data-kt-initialized="1">
                                        <i class="ki-outline ki-setting-3 fs-3"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-payment-mehtod-action="set_as_primary">
                                                Set as Primary
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_customer_view_payment_method_2" class="collapse  fs-6 ps-10"
                                data-bs-parent="#kt_customer_view_payment_method_accordion">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap py-5">
                                    <!--begin::Col-->
                                    <div class="flex-equal me-5">
                                        <table class="table table-flush fw-semibold gy-1">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Name</td>
                                                    <td class="text-gray-800">Melody Macy</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Number</td>
                                                    <td class="text-gray-800">**** 4512</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Expires</td>
                                                    <td class="text-gray-800">02/2022</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Type</td>
                                                    <td class="text-gray-800">Visa credit card</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                    <td class="text-gray-800">ENBANK</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">ID</td>
                                                    <td class="text-gray-800">id_w2r84jdy723</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="flex-equal ">
                                        <table class="table table-flush fw-semibold gy-1">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Billing
                                                        address</td>
                                                    <td class="text-gray-800">UK</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Phone</td>
                                                    <td class="text-gray-800">No phone provided</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Email</td>
                                                    <td class="text-gray-800"><a href="#"
                                                            class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Origin</td>
                                                    <td class="text-gray-800">United Kingdom <div
                                                            class="symbol symbol-20px symbol-circle ms-2">
                                                            <img
                                                                src="/metronic8/demo35/assets/media/flags/united-kingdom.svg">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">CVC check
                                                    </td>
                                                    <td class="text-gray-800">Passed <i
                                                            class="ki-outline ki-check fs-2 text-success"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Option-->

                        <div class="separator separator-dashed"></div>
                        <!--begin::Option-->
                        <div class="py-0" data-kt-customer-payment-method="row">
                            <!--begin::Header-->
                            <div class="py-3 d-flex flex-stack flex-wrap">
                                <!--begin::Toggle-->
                                <div class="accordion-header d-flex align-items-center collapsed"
                                    data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button"
                                    aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
                                    <!--begin::Arrow-->
                                    <div class="accordion-icon me-2">
                                        <i class="ki-outline ki-right fs-4"></i>
                                    </div>
                                    <!--end::Arrow-->

                                    <!--begin::Logo-->
                                    <img src="/metronic8/demo35/assets/media/svg/card-logos/american-express.svg"
                                        class="w-40px me-3" alt="">
                                    <!--end::Logo-->

                                    <!--begin::Summary-->
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="text-gray-800 fw-bold">
                                                American Express </div>

                                            <div class="badge badge-light-danger ms-5">Expired</div>
                                        </div>
                                        <div class="text-muted">Expires Aug 2021</div>
                                    </div>
                                    <!--end::Summary-->
                                </div>
                                <!--end::Toggle-->

                                <!--begin::Toolbar-->
                                <div class="d-flex my-3 ms-9">
                                    <!--begin::Edit-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" aria-label="Edit"
                                            data-bs-original-title="Edit" data-kt-initialized="1">
                                            <i class="ki-outline ki-pencil fs-3"></i> </span>
                                    </a>
                                    <!--end::Edit-->

                                    <!--begin::Delete-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                        data-bs-toggle="tooltip" data-kt-customer-payment-method="delete"
                                        aria-label="Delete" data-bs-original-title="Delete" data-kt-initialized="1">
                                        <i class="ki-outline ki-trash fs-3"></i> </a>
                                    <!--end::Delete-->

                                    <!--begin::More-->
                                    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                        data-bs-toggle="tooltip" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" aria-label="More Options"
                                        data-bs-original-title="More Options" data-kt-initialized="1">
                                        <i class="ki-outline ki-setting-3 fs-3"></i> </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-payment-mehtod-action="set_as_primary">
                                                Set as Primary
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div id="kt_customer_view_payment_method_3" class="collapse  fs-6 ps-10"
                                data-bs-parent="#kt_customer_view_payment_method_accordion">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap py-5">
                                    <!--begin::Col-->
                                    <div class="flex-equal me-5">
                                        <table class="table table-flush fw-semibold gy-1">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Name</td>
                                                    <td class="text-gray-800">Max Smith</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Number</td>
                                                    <td class="text-gray-800">**** 6676</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Expires</td>
                                                    <td class="text-gray-800">08/2021</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Type</td>
                                                    <td class="text-gray-800">American express credit card
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                    <td class="text-gray-800">USABANK</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">ID</td>
                                                    <td class="text-gray-800">id_89457jcje63</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="flex-equal ">
                                        <table class="table table-flush fw-semibold gy-1">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Billing
                                                        address</td>
                                                    <td class="text-gray-800">US</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Phone</td>
                                                    <td class="text-gray-800">No phone provided</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Email</td>
                                                    <td class="text-gray-800"><a href="#"
                                                            class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">Origin</td>
                                                    <td class="text-gray-800">United States of America <div
                                                            class="symbol symbol-20px symbol-circle ms-2">
                                                            <img
                                                                src="/metronic8/demo35/assets/media/flags/united-states.svg">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted min-w-125px w-125px">CVC check
                                                    </td>
                                                    <td class="text-gray-800">Failed <i
                                                            class="ki-outline ki-cross fs-2 text-danger"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Option-->

                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end:::Tab pane-->
    </div>
    <!--end:::Tab content-->


    <script>
        $(document).ready(function() {
            $('.btn').click(function(e) {
                e.preventDefault();

                var solicitudId = $(this).data('solicitud-id');
                var action = $(this).data('action');

                $.ajax({
                    url: 'functions/admin/update.php',
                    type: 'POST',
                    data: {
                        solicitud_id: solicitudId,
                        action: action
                    },
                    success: function(response) {
                        console.log(response); // Imprimir la respuesta en la consola
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown); // Imprimir el error en la consola
                    }
                });
            });
        });
    </script>