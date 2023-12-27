<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../../data/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Datos de la solicitud
    $datosSolicitud = array(
        'tipo' => $_POST['tipo'],
        'currency' => $_POST['currency'],
        'proveedor' => $_POST['proveedor'],
        'categoria' => $_POST['proyecto'], // Cambiado de 'proyecto' a 'categoria'
        'motivo' => $_POST['motivo'],
        'user' => $_POST['user'],
        'address' => isset($_POST['address']) ? $_POST['address'] : ''
    );

    // Datos de los artículos
    $datosArticulos = array(
        'articulo_numero_parte' => $_POST['articulo_numero_parte'],
        'articulo_descripcion' => $_POST['articulo_descripcion'],
        'articulo_unidad' => $_POST['articulo_unidad'],
        'articulo_cantidad' => $_POST['articulo_cantidad'],
        'articulo_precio' => $_POST['articulo_precio']
    );
    // Iniciar la transacción
    $pdo->beginTransaction();

    try {
        // Insertar en la tabla 'solicitudes'
        $stmt = $pdo->prepare("INSERT INTO solicitudes (tipo, currency, proveedor, categoria, motivo, user_id, address) 
            VALUES (:tipo, :currency, :proveedor, :categoria, :motivo, :user_id, :address)");
        
        $stmt->bindParam(':tipo', $datosSolicitud['tipo']);
        $stmt->bindParam(':currency', $datosSolicitud['currency']);
        $stmt->bindParam(':proveedor', $datosSolicitud['proveedor']);
        $stmt->bindParam(':categoria', $datosSolicitud['categoria']); // Cambiado de 'proyecto' a 'categoria'
        $stmt->bindParam(':motivo', $datosSolicitud['motivo']);
        $stmt->bindParam(':user_id', $datosSolicitud['user']);
        $stmt->bindParam(':address', $datosSolicitud['address']);
        
        $stmt->execute();

        // Obtener el ID de la última solicitud insertada
        $solicitudId = $pdo->lastInsertId();

        // Insertar en la tabla 'articulos'
        $stmt = $pdo->prepare("INSERT INTO articulos (solicitud_id, numero_parte, descripcion, unidad, cantidad, precio) VALUES (:solicitud_id, :numero_parte, :descripcion, :unidad, :cantidad, :precio)");

        foreach ($datosArticulos['articulo_numero_parte'] as $key => $numeroParte) {
            $stmt->bindParam(':solicitud_id', $solicitudId);
            $stmt->bindParam(':numero_parte', $numeroParte);
            $stmt->bindParam(':descripcion', $datosArticulos['articulo_descripcion'][$key]);
            $stmt->bindParam(':unidad', $datosArticulos['articulo_unidad'][$key]);
            $stmt->bindParam(':cantidad', $datosArticulos['articulo_cantidad'][$key]);
            $stmt->bindParam(':precio', $datosArticulos['articulo_precio'][$key]);

            $stmt->execute();
        }

        // Confirmar la transacción
        $pdo->commit();
        
        echo "Datos insertados correctamente.";
    } catch (PDOException $e) {
        // Revertir la transacción si hay un error
        $pdo->rollBack();
        
        echo "Error: " . $e->getMessage();
    }
}
?>
