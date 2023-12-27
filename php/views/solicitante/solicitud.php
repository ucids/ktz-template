<?
ini_set('display_errors', 1);
error_reporting(E_ALL);
$solicitudId = $_GET['solicitud'];
$smt = $pdo->prepare("SELECT * FROM View_Solicitudes WHERE id = :id");
$smt->bindParam(':id', $solicitudId);
$smt->execute();
$solicitud = $smt->fetch(PDO::FETCH_ASSOC);
$status = $solicitud['status'];
$usuario = $solicitud['usuario'] . ' ' . $solicitud['lastname'];
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
$total = $solicitud['total'];
?>
<!--begin::Layout-->
<div class="d-flex flex-column flex-xl-row">

    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin:::Tab content-->
        <!--begin::Card-->
        <div class="card pt-4 mb-6 mb-xl-9">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2 class="fw-bold mb-0">Solicitud</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card-->
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
                                        <h2 class="fw-bold">Solicitante</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="fw-bold fs-2">
                                        <div class="d-flex">
                                            <i class="ki-outline ki-user text-info fs-2x"></i>
                                            <div class="ms-2">
                                                <? echo $usuario; ?> <span class="text-muted fs-4 fw-semibold"></span>
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
                            <a class="card bg-<? echo $color; ?> hoverable h-md-100">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <i class="ki-outline ki-award text-white fs-3x ms-n1"></i>
                                    <div class="text-white fw-bold fs-2 mt-5">
                                        <? echo $estado; ?>
                                    </div>

                                    <div class="fw-semibold text-white">
                                        <? echo strtoupper($tipo); ?>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Reward Tier-->
                        </div>
                    </div>

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
                                                <? echo '$93939' ?> <span class="text-muted fs-4 fw-semibold">Disponibles</span>
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
                                        <? echo $solicitudId ?>
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
                                            <? foreach ($articulos as $articulo) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Thumbnail-->
                                                            <a href="#" class="symbol symbol-50px">
                                                                <span class="symbol-label" style="background-image:url(assets/media/ktz/cow.png);"></span>
                                                            </a>
                                                            <!--end::Thumbnail-->
                                                            <!--begin::Title-->
                                                            <div class="ms-5">
                                                                <a href="/metronic8/demo35/../demo35/apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">
                                                                    <? echo $articulo['numero_parte']; ?>
                                                                </a>
                                                                <div class="fs-7 text-muted">
                                                                    <? echo $articulo['descripcion']; ?>
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <? echo $articulo['unidad'] ?>
                                                    </td>
                                                    <td class="text-end">
                                                        <? echo $articulo['cantidad'] ?>
                                                    </td>
                                                    <td class="text-end">
                                                        $
                                                        <? echo $articulo['precio'] ?>
                                                    </td>
                                                    <td class="text-end">
                                                        $
                                                        <? echo number_format($articulo['precio'] * $articulo['cantidad'], 2) ?>
                                                    </td>
                                                </tr>
                                            <? } ?>
                                            <tr>
                                                <td colspan="4" class="fs-3 text-gray-900 text-end">
                                                    Grand Total
                                                </td>
                                                <? // Preparar la sentencia SQL
                                                $stmt = $pdo->prepare("SELECT SUM(precio * cantidad) AS total_precio FROM articulos WHERE solicitud_id = :solicitud_id");

                                                // Vincular el ID de la solicitud a la sentencia SQL
                                                $stmt->bindParam(':solicitud_id', $solicitudId);

                                                // Ejecutar la sentencia SQL
                                                $stmt->execute();

                                                // Recuperar el resultado de la consulta
                                                $result = $stmt->fetch(); ?>
                                                <td class="text-gray-900 fs-3 fw-bolder text-end">
                                                    <? echo "$" . number_format($result['total_precio'], 2, '.', ','); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <? if ($status == 1) { ?>
                                    <div class="text-end ms-2">
                                        <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger fs-3" data-solicitud-id="<?php echo $solicitudId; ?>" data-action="rechazar">Rechazar</a>

                                        <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success fs-3 ms-7" data-solicitud-id="<?php echo $solicitudId; ?>" data-action="aprobar">Aprobar</a>
                                    </div>
                                <? } else { ?>
                                    <!--begin::Alert-->
                                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-search-list fs-2hx text-success me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <!--begin::Title-->
                                            <h5 class="mb-1">This is an alert</h5>
                                            <!--end::Title-->

                                            <!--begin::Content-->
                                            <span>The alert component can be used to highlight certain parts of your page for higher
                                                content visibility.</span>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Close-->
                                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                            <i class="ki-duotone ki-cross fs-1 text-success"><span class="path1"></span><span class="path2"></span></i>
                                        </button>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Alert-->
                                <? } ?>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.btn').click(function(e) {
            e.preventDefault();

            var solicitudId = $(this).data('solicitud-id');
            var action = $(this).data('action');
            var parentDiv = $(this).parent(); // Guardar el div padre

            $.ajax({
                url: 'functions/admin/update.php',
                type: 'POST',
                data: {
                    solicitud_id: solicitudId,
                    action: action
                },
                success: function(response) {
                    console.log(response); // Imprimir la respuesta en la consola
                    location.reload(); // Recargar la página
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown); // Imprimir el error en la consola
                },
                complete: function(jqXHR, textStatus) {
                    console.log('AJAX call completed with status: ' +
                        textStatus); // Imprimir el estado de la solicitud en la consola
                }
            });
        });
    });
</script>