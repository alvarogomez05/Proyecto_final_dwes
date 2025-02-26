<?php
session_start();

$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=servicios';

$codigo = $_GET['codigo'] ?? '';
$precio = $_GET['precio'] ?? '';

$url .= '&id=' . urlencode($codigo);
$url .= '&precio=' . urlencode($precio);

if ($codigo && $precio) {

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



// servicios
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=servicios';
$response = file_get_contents($url);
$servicios = json_decode($response, true);

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
            <label class="block text-gray-700 font-bold mb-2">Código:</label>
            <select required type="text" name="codServicio" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
                <?php foreach ($servicios as $servicio) {
                    echo "<option value='" . $servicio['codigo'] . "'>" . $servicio['codigo'] . ' - ' . $servicio['nombre'] . ' - ' . $servicio['precio'] . "</option>";
                } ?>
            </select>

            <div>
                <label for="precio" class="block text-gray-700">Nuevo Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-700">
            </div>

            <button type="submit" class="w-full bg-sky-700 text-white py-2 px-4 rounded-lg hover:bg-sky-800 transition">Enviar</button>
        </form>
    </div>
    <a href="./../main.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>