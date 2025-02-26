<?php
session_start();
// RELLENAR LOS OPTIONS 
// servicios
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=servicios';
$response = file_get_contents($url);
$servicios = json_decode($response, true);

// perros
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=perros';
$response = file_get_contents($url);
$perros = json_decode($response, true);

// empleados
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=empleados';
$response = file_get_contents($url);
$empleados = json_decode($response, true);

// HACER UN POST AL ENVIAR EL FORMULARIO
// $_GET['codServicio'], $_GET['idPerro'], $_GET['fecha'], $_GET['incidencias'], $_GET['dni']

$url2 = 'http://localhost/dwes/proyecto%20final/backend/?ruta=prs';

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
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6 flex justify-center">
    <form class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg border border-sky-700">
        <h2 class="text-xl font-bold text-sky-700 mb-4">Registrar Servicio</h2>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Código de Servicio</label>
            <select required type="text" name="codServicio" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
                <?php foreach ($servicios as $servicio) {
                    echo "<option value='" . $servicio['codigo'] . "'>" . $servicio['codigo'] . ' - ' . $servicio['nombre'] . "</option>";
                } ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">ID del Perro</label>
            <select required type="number" name="idPerro" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
                <?php foreach ($perros as $perro) {
                    echo "<option value='" . $perro['id'] . "'>" . $perro['id'] . ' - ' . $perro['nombre'] . "</option>";
                } ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Fecha</label>
            <input required type="date" name="fecha" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Incidencias</label>
            <textarea required name="incidencias" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">DNI</label>
            <?php

            // $_SESSION['rol'] = 'emple';
            // $_SESSION['dni'] = '77777777Z';


            if (isset($_SESSION['rol'])) {
                //  si el rol que se registra es admin sera este 

                if ($_SESSION['rol'] === 'ADMIN') {
                    echo '<select required type="text" name="dni" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">';
                    foreach ($empleados as $empleado) {
                        echo "<option value='" . $empleado['dni'] . "'>" . $empleado['dni'] . ' - ' . $empleado['nombre'] . "</option>";
                    }
                    echo '</select>';
                } else {
                    // si no es admin solo le saldra su dni fijo y fuera 
                    echo '<input required readonly type="string" name="dni" value="' .  $_SESSION['dni']  . '" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">';
                }
            }

            ?>
        </div>



        <button type="submit" class="bg-sky-700 text-white font-bold px-4 py-2 rounded hover:bg-sky-800 w-full">
            Enviar
        </button>
    </form>

    <a href="./select.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>