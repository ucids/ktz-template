<?php
include 'data/db.php';

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$rol_id = $_SESSION['rol_id'];
$full_name = $_SESSION['nombre'].' '.$_SESSION['lastname'];

$departamentoId = $_SESSION['departamento_id'];

$stmt = $pdo->prepare('SELECT * FROM departamentos WHERE id = ?');
$stmt->execute([$departamentoId]);
$departamento = $stmt->fetch(PDO::FETCH_ASSOC);
$nombreDepartamento = ucfirst(strtolower($departamento['departamento'])); 

$sql = "SELECT rol FROM roles WHERE id = :rol_id";
// Preparar la consulta
$stmt = $pdo->prepare($sql);
// Asociar el valor de rol_id al parámetro en la consulta
$stmt->bindParam(':rol_id', $rol_id, PDO::PARAM_INT);
// Ejecutar la consulta
$stmt->execute();
// Obtener el resultado
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
$res_rol = $resultado['rol'];
$rol = strtolower($res_rol);
?>
