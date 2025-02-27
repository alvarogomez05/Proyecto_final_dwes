<?php
session_start();
// RELLENAR LOS OPTIONS 
// servicios
$url = 'http://localhost/perros/backend/?ruta=servicios';
$response = file_get_contents($url);
$servicios = json_decode($response, true);

// perros
$url = 'http://localhost/perros/backend/?ruta=perros';
$response = file_get_contents($url);
$perros = json_decode($response, true);

// empleados
$url = 'http://localhost/perros/backend/?ruta=empleados';
$response = file_get_contents($url);
$empleados = json_decode($response, true);

// HACER UN POST AL ENVIAR EL FORMULARIO
// $_GET['codServicio'], $_GET['idPerro'], $_GET['fecha'], $_GET['incidencias'], $_GET['dni']

$url2 = 'http://localhost/perros/backend/?ruta=prs';

// Recibir datos del formulario
$codServicio = $_GET['codServicio'] ?? '';
$idPerro = $_GET['idPerro'] ?? '';
$fecha = $_GET['fecha'] ?? '';
$incidencias = $_GET['incidencias'] ?? '';
$dni = $_GET['dni'] ?? '';


// Construir la URL con los parámetros
$url2 .= '&codServicio=' . urlencode($codServicio);
$url2 .= '&idPerro=' . urlencode($idPerro);
$url2 .= '&fecha=' . urlencode($fecha);
$url2 .= '&incidencias=' . urlencode($incidencias);
$url2 .= '&dni=' . urlencode($dni);


// Validar que todos los campos requeridos estén completos
if ($codServicio && $idPerro && $fecha && $incidencias && $dni) {
    // Datos del nuevo empleado
    $newServ = [
        'codServicio' => $codServicio,
        'idPerro' => $idPerro,
        'fecha' => $fecha,
        'incidencias' => $incidencias,
        'dni' => $dni,
    ];

    // Convertir los datos a JSON
    $data = json_encode($newServ);

    // Inicializar cURL
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL, $url2);
    curl_setopt($conexion, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data)
    ]);
    curl_setopt($conexion, CURLOPT_POST, true);
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $data);
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar petición y obtener respuesta
    $response = curl_exec($conexion);

    // Cerrar conexión cURL
    curl_close($conexion);
    echo "<script>alert('Servicio realizado insertado !!!!!!!'); window.location.href='./ListarServiciosRealizadosView.php';</script>";
}
?>