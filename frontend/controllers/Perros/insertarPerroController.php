<?php

// Depuración: Mostrar variables
echo "<pre>";
var_dump($_GET);
echo "</pre>";

if (isset($_GET['submit'])) {
    $url = "http://localhost/perros/backend/?ruta=perros";

    // Recibir datos del formulario
    $params = [
        'dni_cliente' => trim($_GET['dni_cliente'] ?? ''),
        'nombre' => trim($_GET['nombre'] ?? ''),
        'FechaNto' => trim($_GET['FechaNto'] ?? ''),
        'raza' => trim($_GET['raza'] ?? ''),
        'peso' => trim($_GET['peso'] ?? ''),
        'altura' => trim($_GET['altura'] ?? ''),
        'observaciones' => trim($_GET['observaciones'] ?? ''),
        'numero_chip' => trim($_GET['numero_chip'] ?? ''),
        'sexo' => trim($_GET['sexo'] ?? '')
    ];

    // Validar datos
    foreach ($params as $key => $value) {
        if (empty($value) && $key !== 'observaciones') {
            echo "<script>alert('Error: Todos los campos requeridos deben estar completos.'); window.history.back();</script>";
            exit;
        }
    }

    if (!is_numeric($params['peso']) || !is_numeric($params['altura'])) {
        echo "<script>alert('Error: Peso y altura deben ser valores numéricos.'); window.history.back();</script>";
        exit;
    }

    // Convertir datos a JSON
    $data = json_encode($params);

    // Inicializar cURL
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($conexion, CURLOPT_POST, true);
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $data);
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la petición y obtener respuesta
    $response = curl_exec($conexion);
    $http_code = curl_getinfo($conexion, CURLINFO_HTTP_CODE);

    if ($response === false || curl_errno($conexion)) {
        $error = curl_error($conexion);
        curl_close($conexion);
        echo "<script>alert('Error en la petición: $error'); window.location.href = '../../pages/main.php';</script>";
        exit;
    }

    curl_close($conexion);

    // Depuración: Ver respuesta del backend
    echo "<pre>Respuesta del servidor: ";
    var_dump($response);
    echo "</pre>";

    // Verificar si el servidor respondió correctamente
    if ($http_code == 200) {
        echo "<script>alert('Registro exitoso. ¡El perro {$params['nombre']} ha sido registrado!'); window.location.href = '../../pages/main.php';</script>";
    } else {
        echo "<script>alert('Error en el registro. Código HTTP: $http_code'); window.history.back();</script>";
    }
}
