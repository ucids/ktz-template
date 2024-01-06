<?php
// get_counts.php
require '../../data/db.php'; // Replace this with your database connection file

function getCount($pdo, $estado) {
    $sql = "SELECT COUNT(*) FROM Vista_Solicitudes WHERE estado = :estado";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':estado' => $estado]);
    return $stmt->fetchColumn();
}

$newCount = getCount($pdo, 'Nueva Solicitud');
$approvedCount = getCount($pdo, 'La solicitud ha sido aprobada');

echo json_encode(['newCount' => $newCount, 'approvedCount' => $approvedCount]);
?>