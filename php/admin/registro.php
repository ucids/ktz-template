<?
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // El usuario no ha iniciado sesión, redirige a la página de inicio de sesión o muestra un mensaje de error
    header("Location: admin/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuario</title>
</head>

<body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="registrar_usuario.php">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="role">Rol:</label>
        <select name="role" id="role" required>
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>

</html>