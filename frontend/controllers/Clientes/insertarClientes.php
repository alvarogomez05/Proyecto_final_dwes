<?php
$url = "http://localhost/perros/backend/?ruta=clientes";
// Recibir datos del formulario
$dni = $_GET['dni'] ?? '';

$nombre = $_GET['nombre'] ?? '';
$apellido1 = $_GET['apellido1'] ?? '';
$apellido2 = $_GET['apellido2'] ?? '';
$tlfno = $_GET['tlfno'] ?? '';
$direccion = $_GET['tlfno'] ?? '';
// Construir la URL con los parámetros
$url .= '&dni=' . urlencode($dni);


$url .= '&nombre=' . urlencode($nombre);
$url .= '&apellido1=' . urlencode($apellido1);
$url .= '&apellido2=' . urlencode($apellido2);
$url .= '&direccion=' . urlencode($direccion);
$url .= '&tlfno=' . urlencode($tlfno);

// Validar que todos los campos requeridos estén completos
if ($dni  && $nombre && $apellido1 && $apellido2   && $tlfno) {
    // Datos del nuevo empleado
    $newUser = [
        'dni' => $dni,



        'nombre' => $nombre,
        'apellido1' => $apellido1,
        'apellido2' => $apellido2,

        'tlfno' => $tlfno,

    ];

    // Convertir los datos a JSON
    $data = json_encode($newUser);

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
        echo "<script>alert('Registro fallido el cliente ya existe); ";
    
    } else { 
        echo "<script>alert('Registro exitoso. ¡Registrado {$nombre} con éxito!'); window.location.href = './../../pages/Clientes/listarClientes.php';</script>";
    }

    // Cerrar conexión cURL
    curl_close($conexion);
   
} 
