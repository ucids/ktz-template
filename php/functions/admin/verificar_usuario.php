<?php
// Obtener los valores del formulario y aplicar formato
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../../data/db.php';

// Obtén el número de empleado del formulario
$username = isset($_POST['username']) ? $_POST['username'] : '';

// Verifica si el número de empleado ya existe en la base de datos
$query = "SELECT id FROM users WHERE username = :username";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->execute();
$result = $stmt->fetch();

if ($result) {
    // El número de empleado ya existe
    echo 'existe';
} else {
    // El número de empleado no existe, puedes continuar con el proceso
    echo 'no_existe';
}
?>
