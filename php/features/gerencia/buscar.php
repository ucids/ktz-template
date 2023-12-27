<?php
include '../../data/db.php';

if (isset($_POST['filtro']) && isset($_POST['pagina']) && isset($_POST['elementosPorPagina'])) {
    $filtro = $_POST['filtro'];
    $pagina = $_POST['pagina'];
    $elementosPorPagina = $_POST['elementosPorPagina'];

    // Calcular el índice de inicio para la consulta
    $inicio = ($pagina - 1) * $elementosPorPagina;

    // Consulta para realizar la búsqueda en el servidor
    $stmt = $pdo->prepare('SELECT d.id as departamento_id, d.nombre as departamento_nombre, p.id as presupuesto_id, p.monto FROM departamentos d LEFT JOIN presupuestos p ON d.id = p.departamento_id WHERE UPPER(d.nombre) LIKE :filtro OR UPPER(p.monto) LIKE :filtro ORDER BY p.monto DESC LIMIT :inicio, :elementosPorPagina');
    $stmt->bindValue(':filtro', '%' . $filtro . '%', PDO::PARAM_STR);
    $stmt->bindParam(':inicio', $inicio, PDO::PARAM_INT);
    $stmt->bindParam(':elementosPorPagina', $elementosPorPagina, PDO::PARAM_INT);
    $stmt->execute();
    $resultadosBusqueda = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mostrar resultados de la búsqueda
    foreach ($resultadosBusqueda as $resultado) {
        echo '<tr>';
        echo '<td>' . $resultado['departamento_nombre'] . '</td>';
        echo '<td>' . $resultado['monto'] . '</td>';
        echo '<td>';
        // Formulario de edición
        echo '<form method="post" action="features/gerencia/actualizar_presupuesto.php">';
        echo '<input type="hidden" name="departamento_id" value="' . $resultado['departamento_id'] . '">';
        echo '<label for="nuevo_monto">Nuevo Monto:</label>';
        echo '<input type="text" name="nuevo_monto" value="' . $resultado['monto'] . '">';
        echo '<input type="submit" value="Actualizar">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
}
?>
