<?php
// Obtener el ID de la solicitud y la acción de los datos de la solicitud
require '../../data/db.php';
$solicitudId = $_POST['solicitud_id'];
$action = $_POST['action'];

// Determinar el estado_id basado en la acción
$estadoId = $action == 'aprobar' ? 3 : 4;

// Preparar la sentencia SQL
$stmt = $pdo->prepare("UPDATE solicitudes SET estado_id = :estado_id WHERE id = :solicitud_id");

// Vincular los valores a la sentencia SQL
$stmt->bindParam(':estado_id', $estadoId);
$stmt->bindParam(':solicitud_id', $solicitudId);

// Ejecutar la sentencia SQL
$stmt->execute();

// Si la acción es 'aprobar', insertar en la tabla gastos
if ($action == 'aprobar') {
    // Obtener los detalles de la solicitud
    $stmt = $pdo->prepare("SELECT * FROM View_Solicitudes WHERE id = :solicitud_id");
    $stmt->bindParam(':solicitud_id', $solicitudId);
    $stmt->execute();
    $solicitud = $stmt->fetch(PDO::FETCH_ASSOC);

    // Insertar en la tabla gastos
    $stmt = $pdo->prepare("INSERT INTO gastos (departamento_id, categoria_id, solicitud_id, fecha, monto) VALUES (:departamento_id, :categoria_id, :solicitud_id, NOW(), :monto)");
    $stmt->bindParam(':departamento_id', $solicitud['departamento_id']);
    $stmt->bindParam(':categoria_id', $solicitud['categoria_id']);
    $stmt->bindParam(':solicitud_id', $solicitudId);
    $stmt->bindParam(':monto', $solicitud['total']);
    $stmt->execute();
}

echo "Estado actualizado con éxito";
?>