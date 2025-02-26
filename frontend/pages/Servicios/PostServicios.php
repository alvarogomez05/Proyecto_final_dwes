<?php
session_start();

// URL de la API donde se registrarán los empleados
$url = 'http://localhost/perros/backend/?ruta=servicios';

// Recibir datos del formulario
$codigo = $_GET['codigo'] ?? '';
$nombre = $_GET['nombre'] ?? '';
$precio = $_GET['precio'] ?? '';
$desc = $_GET['desc'] ?? '';

// Construir la URL con los parámetros
$url .= '&codigo=' . urlencode($codigo);
$url .= '&nombre=' . urlencode($nombre);
$url .= '&precio=' . urlencode($precio);
$url .= '&desc=' . urlencode($desc);

// Validar que todos los campos requeridos estén completos
if ($codigo && $nombre && $precio && $desc ) {
    // Datos del nuevo empleado
    $newUser = [
        'codigo' => $codigo,
        'nombre' => $nombre,
        'precio' => $precio,
        'desc' => $desc,
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
    $httpCode = curl_getinfo($conexion, CURLINFO_HTTP_CODE);
    // Verificar si hubo error en la petición
    if ($response === false) {
        echo "<script>alert('Error en la conexión con el servidor.');</script>";
    } else {
        if ($httpCode == 200) {
            echo "<script>alert('Servicio insertado con éxito !!!!!!!'); window.location.href = './SelectServicios.php';</script>";
        } elseif ($httpCode == 400) {
            $errorMsg = json_decode($response, true)['error'] ?? 'El servicio ya existe';
            echo "<script>alert('Registro fallido: {$errorMsg}');</script>";
        } else {
            echo "<script>alert('Error inesperado. Código HTTP: {$httpCode}');</script>";
        }
    }
    
    // Cerrar conexión cURL
    curl_close($conexion);
    
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Servicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 bg-blend-overlay flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('./../../assets/img/bg2.jpg');">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-sky-700 text-xl font-bold mb-4">Crear Servicio</h2>
        <form action="" method="GET" class="space-y-4">
            <div>
                <label for="codigo" class="block text-gray-700">Código:</label>
                <input type="text" id="codigo" name="codigo" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700">
            </div>
            <div>
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700">
            </div>
            <div>
                <label for="precio" class="block text-gray-700">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700">
            </div>
            <div>
                <label for="descripcion" class="block text-gray-700">Descripción:</label>
                <textarea id="descripcion" name="desc" rows="4" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700"></textarea>
            </div>
            <button type="submit" class="w-full bg-sky-700 text-white py-2 px-4 rounded-lg hover:bg-sky-800 transition">Enviar</button>
        </form>
        <!-- feedback para el usuario -->
         <!-- <p class="text-xl mt-4 <?php if(isset($color)){ echo $color;} ?>"> <?php if(isset($feedback)){ echo $feedback;}?></p> -->
    </div>
    <a href="./SelectServicios.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>