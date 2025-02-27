<?php
session_start();

if (isset($_GET['codigo'])) {

    $url = 'http://localhost/perros/backend/?ruta=servicios&codigo=' . $_GET['codigo'];

    // Inicializar cURL
    $ch = curl_init();

    // Configurar opciones de cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); // Método DELETE
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
    ]);

    // Ejecutar petición y obtener respuesta
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Cerrar cURL
    curl_close($ch);
}

header('location: ./../../pages/Servicios/SelectServicios.php')

?>


<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Servicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 bg-blend-overlay flex justify-center items-center h-screen bg-cover bg-center" style="background-image: url('./../../assets/img/bg2.jpg');">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold text-center text-red-600 mb-4">Eliminar Servicio</h2>
        <form action="" method="GET" class="space-y-4">
            <label class="block font-medium">Código del Servicio:</label>
            <input type="text" name="codigo" required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-400">

            <button type="submit"
                class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg">
                Eliminar Servicio
            </button>
        </form>
    </div>
    <a href="./../main.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html> -->