<?php
// Declarar la zona horaria (opcional pero recomendado)
date_default_timezone_set('America/Bogota');

// Definir una variable con un nombre
$nombre = "Visitante";

// Obtener la hora actual del servidor (formato 24 horas)
$hora = (int)date("H");

// Condicional para mostrar un saludo según la hora del día
if ($hora < 12) {
    $saludo = "¡Buenos días";
} elseif ($hora < 18) {
    $saludo = "¡Buenas tardes";
} else {
    $saludo = "¡Buenas noches";
}

// Imprimir el resultado mezclando texto y variables
echo $saludo . ", " . $nombre . "!\n";
echo "Hoy es " . date("d/m/Y") . " y la hora exacta es " . date("H:i:s") . ".\n";
?>

