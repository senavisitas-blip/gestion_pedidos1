<?php
// Configuración de las credenciales de la base de datos
$host     = 'localhost';
$db_name  = 'gestion_pedidos1'; // Reemplaza con el nombre de tu base de datos
$username = 'root';              // Usuario por defecto en XAMPP
$password = '';                  // Contraseña por defecto en XAMPP (vacía)
$charset  = 'utf8mb4';           // Permite eñes, acentos y emojis

// Configuración de opciones de PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Activa el reporte de errores graves
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve los datos como arreglos asociativos
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Desactiva la emulación para mayor seguridad
];

// Cadena de conexión (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";

try {
    // Intentar crear la conexión
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // NOTA: Si ves la página en blanco al cargar este archivo, significa que funcionó perfectamente.
    // Si estás probando por primera vez, puedes desenterrar la línea de abajo para confirmar:
    // echo "Conexión exitosa a la base de datos.";

} catch (PDOException $e) {
    // Si algo sale mal, detiene la aplicación y muestra el error
    die("Error crítico de conexión: " . $e->getMessage());
}
?>
