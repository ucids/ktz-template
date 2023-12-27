<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Archivo de conexión a la base de datos (db.php)
include '../../data/db.php';

// Inicia la sesión
session_start();

// Verificar el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario y aplicar formato
    $name = isset($_POST['name']) ? ucwords(strtolower($_POST['name'])) : '';
    $lastname = isset($_POST['lastname']) ? ucwords(strtolower($_POST['lastname'])) : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? strtolower($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $rol = isset($_POST['rol']) ? $_POST['rol'] : '';
    $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : '';

    // Verificar si el username ya existe
    $query_username = "SELECT id FROM users WHERE username = :username";
    $stmt_username = $pdo->prepare($query_username);
    $stmt_username->bindParam(':username', $username);
    $stmt_username->execute();

    // Verificar si el email ya existe
    $query_email = "SELECT id FROM users WHERE email = :email";
    $stmt_email = $pdo->prepare($query_email);
    $stmt_email->bindParam(':email', $email);
    $stmt_email->execute();

    if ($stmt_username->fetch() || $stmt_email->fetch()) {
        // El username o el email ya existen, envía mensaje de error
        $_SESSION['mensaje'] = "El usuario ya existe. Revisa los datos. ";
        $_SESSION['class'] = "danger";
    } else {
        // Hashea la contraseña
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Inserta el nuevo usuario en la base de datos
        $query_insert = "INSERT INTO users (nombre, lastname, password, email, rol_id, departamento_id, username) 
                        VALUES (:name, :lastname, :password, :email, :rol_id, :departamento_id, :username)";
        $stmt_insert = $pdo->prepare($query_insert);
        $stmt_insert->bindParam(':name', $name);
        $stmt_insert->bindParam(':lastname', $lastname);
        $stmt_insert->bindParam(':username', $username);
        $stmt_insert->bindParam(':password', $password_hash);
        $stmt_insert->bindParam(':email', $email);
        $stmt_insert->bindParam(':rol_id', $rol);
        $stmt_insert->bindParam(':departamento_id', $departamento);

        if ($stmt_insert->execute()) {
            // Registro exitoso
            $_SESSION['mensaje'] = "Usuario creado con éxito";
            $_SESSION['class'] = "success";
        } else {
            // Error en el registro
            $_SESSION['mensaje'] = "Hubo un error en el registro. Inténtalo de nuevo.";
            $_SESSION['class'] = "danger";
        }
    }

    // Redirige a la página de origen
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
