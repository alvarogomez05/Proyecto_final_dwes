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
    . '&codigo=' . urlencode($codigo)
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

 $httpCode = curl_getinfo($conexion, CURLINFO_HTTP_CODE);
      // Verificar si hubo error en la petición
      if ($response === false) {
        echo "<script>alert('Error en la conexión con el servidor.');</script>";
    } else {
        if ($httpCode == 200) {
            echo "<script>alert('Registro exitoso. ¡Registrado {$nombre} con éxito!'); window.location.href = './../../pages/Clientes/listarClientes.php';</script>";
        } elseif ($httpCode == 400) {
            $errorMsg = json_decode($response, true)['error'] ?? 'El cliente ya existe';
            echo "<script>alert('Registro fallido: {$errorMsg}');</script>";
        } else {
            echo "<script>alert('Error inesperado. Código HTTP: {$httpCode}');</script>";
        }
    }
?>

