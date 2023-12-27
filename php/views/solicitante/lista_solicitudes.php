<?
$sql = "SELECT * FROM View_Solicitudes Where user_id = $user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$solicitudes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table id="kt_datatable_dom_positioning"
    class="table table-striped table-row-dashed table-row-bordered gy-5 gs-7 border rounded">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 px-7">
            <th>Solicitante</th>
            <th>Categoria</th>
            <th>Articulos</th>
            <th>Tipo</th>
            <th>Proveedor</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($solicitudes as $solicitud) : ?>
        <tr>
            <td><? echo $solicitud['usuario']; ?></td>
            <td><? echo $solicitud['nombre_categoria']; ?></td>
            <td><? echo $solicitud['cantidad_articulos']; ?></td>
            <td><? echo $solicitud['tipo']; ?></td>
            <td><? echo $solicitud['nombre_proveedor']; ?></td>
            <td><? echo $solicitud['created_at']; ?></td>
            <td>
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-gear fs-4"></i>
                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="index.php?section=solicitud&solicitud=<? echo $solicitud['id']; ?>"
                            class="menu-link px-3">
                            Editar
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
                            Eliminar
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>