<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Archivo de conexión a la base de datos (db.php)
include(realpath(__DIR__ . '/../data/db.php'));

// Verificar el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Hashea la contraseña
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Inserta el nuevo usuario en la base de datos
    $query = "INSERT INTO users (username, password, email, role) VALUES (:username, :password, :email, :role)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password_hash);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':role', $role);
    
    if ($stmt->execute()) {
        // Registro exitoso
        header("Location: login.php"); // Redirige a la página de inicio de sesión
        exit();
    } else {
        // Error en el registro
        echo "Hubo un error en el registro. Inténtalo de nuevo.";
    }
}
?>
