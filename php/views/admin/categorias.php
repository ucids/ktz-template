<?php
// Consultar las categorías con información del departamento
$stmtCategorias = $pdo->query("SELECT c.id, c.categoria, c.departamento_id, d.departamento, c.presupuesto 
                    FROM categorias c
                    INNER JOIN departamentos d ON c.departamento_id = d.id");
$categorias = $stmtCategorias->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $categoria = $_POST['categoria'];
    $presupuesto = $_POST['presupuesto'];
    $departamento_id = $_POST['departamento_id'];

    if ($id == 0 || empty($id)) {
        // Es una nueva categoría, realizar la inserción
        $stmt = $pdo->prepare("INSERT INTO categorias (categoria, presupuesto, departamento_id) VALUES (?, ?, ?)");
        $stmt->execute([$categoria, $presupuesto, $departamento_id]);
    } else {
        // Es una categoría existente, realizar la actualización
        $stmt = $pdo->prepare("UPDATE categorias SET categoria = ?, presupuesto = ?, departamento_id = ? WHERE id = ?");
        $stmt->execute([$categoria, $presupuesto, $departamento_id, $id]);
    }

    // Redirigir a la misma página para evitar el mensaje de resubmisión
    echo '<script>window.location.href = "index.php?page=admin/categorias&success=true";</script>';
    exit;
}

// Verificar si hay un mensaje de éxito en la URL
$successMessage = isset($_GET['success']) && $_GET['success'] === 'true';

// Consultar departamentos
$stmtDepartamentos = $pdo->query("SELECT id, departamento FROM departamentos");
$departamentos = $stmtDepartamentos->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Resto de tu HTML -->

<?php if ($successMessage): ?>
    <div class="alert alert-success" role="alert">
        ¡Actualización exitosa!
    </div>
<?php endif; ?>

<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3>Categorias y Departamentos</h3>
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_api_keys_table">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="min-w-175px ps-9">Categoria</th>
                        <th class="min-w-120px px-0">Departamento</th>
                        <th class="min-w-100px">Presupuesto</th>
                        <th class="w-120px ps-9">Actions</th>
                    </tr>
                </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fs-6 fw-semibold text-gray-600">
                    <?php foreach ($categorias as $categoria): ?>
                        <form action="#" method="POST">
                            <input name="id" type="hidden" value="<?= $categoria['id']; ?>">
                            <tr data-select2-id="select2-data-138-rs33">
                                <td class="ps-9">
                                    <input name="categoria" class="form-control form-control-solid" type="text" value="<?= $categoria['categoria'] ?>">    
                                </td>

                                <td data-bs-target="license" class="ps-0">
                                    <!-- Seleccionar el departamento actual -->
                                    <select name="departamento_id" class="form-select">
                                        <?php foreach ($departamentos as $departamento): ?>
                                            <option value="<?= $departamento['id']; ?>" <?= ($departamento['id'] == $categoria['departamento_id']) ? 'selected' : ''; ?>>
                                                <?= $departamento['departamento']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>

                                <td>
                                    <input name="presupuesto" class="form-control form-control-solid" type="number" step="0.01" value="<?= $categoria['presupuesto'] ?>">
                                </td>

                                <td class="pe-9">
                                    <div class="w-120px position-relative">
                                        <button class="btn btn-light-success" type="submit">
                                            <i class="ki-solid ki-archive-tick fs-2x"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    <?php endforeach; ?>

                    <!-- Fila adicional para agregar nueva categoría -->
                    <form action="#" method="POST">
                        <input type="hidden" name="id" value="0">
                        <tr>
                            <td class="ps-9">
                                <input name="categoria" class="form-control form-control-solid" type="text" placeholder="Nueva categoría">
                            </td>
                            <td data-bs-target="license" class="ps-0">
                                <!-- Mostrar un menú desplegable para seleccionar el departamento -->
                                <select name="departamento_id" class="form-select">
                                    <?php foreach ($departamentos as $departamento): ?>
                                        <option value="<?= $departamento['id']; ?>">
                                            <?= $departamento['departamento']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                                <input name="presupuesto" class="form-control form-control-solid" type="number" step="0.01" placeholder="Nuevo presupuesto">
                            </td>
                            <td class="pe-9">
                                <div class="w-120px position-relative">
                                    <button class="btn btn-light-primary" type="submit">
                                        <i class="ki-solid ki-plus-square fs-2x"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </form>
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Body-->
</div>
