<?php

$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=servicios';

$codigo = $_GET['codigo'] ?? '';
$precio = $_GET['precio'] ?? '';

$url .= '&id=' . urlencode($codigo);
$url .= '&precio=' . urlencode($precio);

if( $codigo && $precio){

    $data = [
        'id' => $codigo,
        'precio' => $precio,
    ];



    $ch = curl_init($url);

    $jsonData = json_encode($data);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Servicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen bg-blend-overlay bg-cover bg-center" style="background-image: url('./../../assets/img/bg2.jpg');">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-sky-700 text-xl font-bold mb-4">Actualizar Servicio</h2>
        <form action="" method="GET" class="space-y-4">
            <div>
                <label for="codigo" class="block text-gray-700">Código:</label>
                <input type="text" id="codigo" name="codigo" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700">
            </div>
            
            <div>
                <label for="precio" class="block text-gray-700">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700">
            </div>
            
            <button type="submit" class="w-full bg-sky-700 text-white py-2 px-4 rounded-lg hover:bg-sky-800 transition">Enviar</button>
        </form>
    </div>
</body>

</html>