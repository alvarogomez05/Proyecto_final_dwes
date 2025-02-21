<?php
$url = "http://localhost/perros/backend/?ruta=perros";

// Recibir datos del formulario
$dni_cliente = $_GET['dni_cliente'] ?? '';
$nombre = $_GET['nombre'] ?? '';
$fecha_nto = $_GET['fecha_nto'] ?? '';
$raza = $_GET['raza'] ?? '';
$peso = $_GET['peso'] ?? '';
$altura = $_GET['altura'] ?? '';
$observaciones = $_GET['observaciones'] ?? '';
$numero_chip = $_GET['numero_chip'] ?? '';
$sexo = $_GET['sexo'] ?? '';

// Construir la URL con los parámetros
$url .= '&dni_cliente=' . urlencode($dni_cliente);
$url .= '&nombre=' . urlencode($nombre);
$url .= '&fecha_nto=' . urlencode($fecha_nto);
$url .= '&raza=' . urlencode($raza);
$url .= '&peso=' . urlencode($peso);
$url .= '&altura=' . urlencode($altura);
$url .= '&observaciones=' . urlencode($observaciones);
$url .= '&numero_chip=' . urlencode($numero_chip);
$url .= '&sexo=' . urlencode($sexo);

// Validar que todos los campos requeridos estén completos
if ($dni_cliente && $nombre && $fecha_nto && $raza && $peso && $altura && $numero_chip && $sexo) {
    $newDog = [
        'dni_cliente' => $dni_cliente,
        'nombre' => $nombre,
        'fecha_nto' => $fecha_nto,
        'raza' => $raza,
        'peso' => $peso,
        'altura' => $altura,
        'observaciones' => $observaciones,
        'numero_chip' => $numero_chip,
        'sexo' => $sexo
    ];

    // Convertir los datos a JSON
    $data = json_encode($newDog);

    // Inicializar cURL
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data)
    ]);
    curl_setopt($conexion, CURLOPT_POST, true);
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $data);
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar petición y obtener respuesta
    $response = curl_exec($conexion);

    // Verificar si hubo error en la petición
    if (curl_errno($conexion)) {
        echo "<script>alert('Error en la petición: " . curl_error($conexion) . "'); window.location.href = '../../pages/main.php';</script>";
    } else {
        echo "<script>alert('Registro exitoso. ¡El perro $nombre ha sido registrado!'); window.location.href = '../../pages/main.php';</script>";
    }

    // Cerrar conexión cURL
    curl_close($conexion);
} else {
    echo "<script>alert('Error: Todos los campos requeridos deben estar completos.'); </script>";
}
?>
