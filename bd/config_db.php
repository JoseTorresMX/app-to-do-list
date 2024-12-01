<?php
// Configuración
$host = 'localhost';
$username = 'root'; // Cambiar si es necesario
$password = ''; // Cambiar si es necesario
$dbname = 'todo_list'; // Nombre de la base de datos
$mensajes = []; //Array par almacenar los mensajes

try {
    // Conectar al servidor MySQL
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validar si la base de datos existe
    $stmt = $conn->query("SHOW DATABASES LIKE '$dbname'");
    if ($stmt->rowCount() > 0) {
        $mensajes[] = "La base de datos '$dbname' ya existe.";
        //echo "La base de datos '$dbname' ya existe.<br>";
    } else {
        // Crear la base de datos
        $conn->exec("CREATE DATABASE $dbname");
        //echo "Base de datos '$dbname' creada exitosamente.<br>";
        $mensajes[] = "La base de datos '$dbname' no existía, se ha creado exitosamente.";
    }

    // Usar la base de datos
    $conn->exec("USE $dbname");

    // Crear las tablas si no existen
    $tablas = [
        "task" => "CREATE TABLE IF NOT EXISTS tasks (
            id INT AUTO_INCREMENT PRIMARY KEY,
            names VARCHAR(100) NOT NULL,
            completed BOOLEAN DEFAULT FALSE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            mod_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )"
    ];

    foreach ($tablas as $nombre => $sql) {
        // Verificar si la tabla ya existe
        $stmt = $conn->query("SHOW TABLES LIKE '$nombre'");
        if ($stmt->rowCount() > 0) {
            //echo "La tabla '$nombre' ya existe.<br>";
            $mensajes[] = "La tabla '$nombre' ya existe.";
        } else {
            // Crear la tabla
            $conn->exec($sql);
            //echo "Tabla '$nombre' creada exitosamente.<br>";
            $mensajes[] = "La tabla '$nombre' no existía, se ha creado exitosamente.";
        }
    }
} catch (PDOException $e) {
    //echo "Error: " . $e->getMessage();
    $mensajes[] = "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
// Enviar los mensajes al cliente como código JavaScript
echo "<script>";
foreach ($mensajes as $mensaje) {
    echo "alert('$mensaje');";
}
echo "</script>";
