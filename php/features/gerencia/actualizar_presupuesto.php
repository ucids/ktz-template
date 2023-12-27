<?php
include '../../data/db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $departamentoId = $_POST['departamento_id'];
    $nuevoMonto = $_POST['nuevo_monto'];

    // Registrar información para depuración
    error_log('Datos del formulario recibidos:');
    error_log('departamento_id: ' . $departamentoId);
    error_log('nuevo_monto: ' . $nuevoMonto);

    // echo 'Datos del formulario recibidos:';
    // echo 'departamento_id: ' . $departamentoId;
    // echo 'nuevo_monto: ' . $nuevoMonto;
    // Actualizar el presupuesto en la base de datos
    $stmt = $pdo->prepare('INSERT INTO presupuestos (departamento_id, monto) VALUES (?, ?) ON DUPLICATE KEY UPDATE monto = ?');
    $stmt->execute([$departamentoId, $nuevoMonto, $nuevoMonto]);


    // Redirigir de vuelta a la página anterior
    $paginaAnterior = $_SERVER['HTTP_REFERER'];
    header("Location: $paginaAnterior");
    exit();
}
?>
