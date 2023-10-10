<?php
// Include the configuration file
$pdo = include 'conf.php';

// Use the $pdo variable for database operations
$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch()) {
    // Process the row
    echo $row['id'].$row['descripcion'] . "<br>";
}
?>