<?php
session_start();

// Validar que todos los parámetros existan en la URL
if (!isset($_GET['codigo'], $_GET['nombre'], $_GET['precio'], $_GET['desc'])) {
    echo "<script>alert('Todos los campos son obligatorios.');</script>";
    exit;
}

// Obtener datos del formulario por GET
$codigo = $_GET['codigo'];
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$desc = $_GET['desc'];

// Construir la URL con los parámetros
$url = 'http://localhost/perros/backend/?ruta=servicios'
    . '&id=' . urlencode($codigo)
    . '&nombre=' . urlencode($nombre)
    . '&precio=' . urlencode($precio)
    . '&desc=' . urlencode($desc);

// Inicializar cURL
$conexion = curl_init();
curl_setopt($conexion, CURLOPT_URL, $url);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "GET"); // Asegurar que se usa GET

// Ejecutar la petición y obtener la respuesta
$response = curl_exec($conexion);
$httpCode = curl_getinfo($conexion, CURLINFO_HTTP_CODE);
$error = curl_errno($conexion);
$errorMessage = curl_error($conexion);

// Cerrar conexión cURL
curl_close($conexion);

// Manejo de errores
if ($error) {
    echo "<script>alert('Error en la petición: " . addslashes($errorMessage) . "');</script>";
} elseif ($httpCode == 200 || $httpCode == 201) {
    echo "<script>alert('¡Servicio registrado con éxito!'); window.location.href = './../../pages/Servicios/SelectServicios.php';</script>";
} else {
    echo "<script>alert('Error al registrar el servicio. Código HTTP: " . $httpCode . " Respuesta: " . addslashes($response) . "');</script>";
}
?>

