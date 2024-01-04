<?php
try {
    // Define the SQL query
    $sql = "SELECT * FROM Vista_Solicitudes";

    // Prepare the SQL statement
    $stmt = $pdo->prepare($sql);

    // Execute the statement
    $stmt->execute();

    // Fetch all the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $groupedResults = [];

    // Group the results by status
    foreach ($results as $row) {
        $status = $row['status'];
        if (!isset($groupedResults[$status])) {
            $groupedResults[$status] = [];
        }
        $groupedResults[$status][] = $row;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Define variables for each status
$nueva_solicitud = [];
$en_revision = [];
$aprobada = [];
$rechazada = [];
$comprada = [];
$en_almacen = [];
$entrega_parcial = [];
$entrega_total = [];
$finalizada = [];

// Group the results by status
foreach ($results as $row) {
    $status = $row['estado'];
    // Replace spaces with underscores and convert to lowercase for valid variable names
    $status = str_replace(' ', '_', strtolower($status));
    $resultsByStatus[$status][] = $row;
}
// Now you can access the results for each status using the $resultsByStatus array
$nueva_solicitud = isset($resultsByStatus['nueva_solicitud']) ? $resultsByStatus['nueva_solicitud'] : [];
$aprobada = isset($resultsByStatus['la_solicitud_ha_sido_aprobada']) ? $resultsByStatus['la_solicitud_ha_sido_aprobada'] : [];
$rechazada = isset($resultsByStatus['la_solicitud_ha_sido_rechazada']) ? $resultsByStatus['la_solicitud_ha_sido_rechazada'] : [];
$comprada = isset($resultsByStatus['comprada']) ? $resultsByStatus['comprada'] : [];
$en_almacen = isset($resultsByStatus['en_almacen']) ? $resultsByStatus['en_almacen'] : [];
$entrega_parcial = isset($resultsByStatus['entrega_parcial']) ? $resultsByStatus['entrega_parcial'] : [];
$entrega_total = isset($resultsByStatus['entrega_total']) ? $resultsByStatus['entrega_total'] : [];
$finalizada = isset($resultsByStatus['finalizada']) ? $resultsByStatus['finalizada'] : [];

function generateTable($solicitudes, $tableId)
{
?>
<table id="<?= $tableId ?>" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 px-7">
            <th></th>
            <th class="min-w-150px" data-priority="1">Solicitante</th>
            <th class="min-w-90px">Departamento</th>
            <th>tipo</th>
            <th class="min-w-200px">Proveedor</th>
            <th>Articulos</th>
            <th class="min-w-130px">Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudes as $row) : ?>
        <tr>
            <td>
                <div class="symbol symbol-45px me-5">
                    <span
                        class="symbol-label bg-light-danger text-danger fw-bold"><?= $row['usuario'][0] . $row['lastname'][0]?></span>
                </div>
            </td>
            <td><?= $row['usuario'] . ' ' . $row['lastname']; ?></td>
            <td><?= $row['departamento']; ?></td>
            <td> <span
                    class="ms-2 badge <?= $row['tipo'] == 'po' ? 'badge-light-primary' : 'badge-light-info' ?> fw-bold"><?= strtoupper($row['tipo']); ?></span>
            </td>
            <td><?= $row['nombre_proveedor']; ?></td>
            <td><?= $row['cantidad_global']; ?></td>
            <td>$<?= $row['total'] ?><span
                    class="ms-2 badge <?= strtoupper($row['currency']) == 'USD' ? 'badge-light-primary' : 'badge-light-success' ?> fw-bold"><?= strtoupper($row['currency']) ?></span>
            </td>
            <td class="text-end" data-priority="2">
                <a href="index.php?page=solicitud&id=<?= $row['id'] ?>"
                    class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                    <i class="ki-outline ki-switch fs-2"></i> </a>

                <!-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-outline ki-pencil fs-2"></i>                                </a> -->

                <!-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-outline ki-trash fs-2"></i>                                </a> -->
            </td>
        </tr>
        <? endforeach; ?>
    </tbody>
</table>
<?php
}