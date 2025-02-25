<?php
if (isset($_GET['submit'])) {

    $url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=prs&srCod=' . $_GET['submit'];

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

?>

<?php

$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=prs';
$response = file_get_contents($url);
$data = json_decode($response, true);

// print_r($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios realizados</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 p-10 bg-cover bg-center bg-blend-overlay" style="background-image: url('./../../assets/img/bg2.jpg');">

    <div class="w-full max-w-4xl mx-auto p-4 bg-white shadow-lg rounded-lg">
        <h2 class="text-xl font-bold text-center text-sky-700 mb-4">Lista de Servicios</h2>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-sky-700">
                <thead>
                    <tr class="bg-sky-700 text-white">
                        <th class="border border-sky-600 px-4 py-2">Sr_Cod</th>
                        <th class="border border-sky-600 px-4 py-2">Código Servicio</th>
                        <th class="border border-sky-600 px-4 py-2">ID Perro</th>
                        <th class="border border-sky-600 px-8 py-2">Fecha</th>
                        <th class="border border-sky-600 px-4 py-2">Incidencias</th>
                        <th class="border border-sky-600 px-4 py-2">Precio Final</th>
                        <th class="border border-sky-600 px-4 py-2">DNI</th>
                        <th class="border border-sky-600 px-4 py-2">acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $fila) {
                        echo "<tr class='odd:bg-gray-100 even:bg-white hover:bg-sky-100'>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Sr_Cod"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Cod_Servicio"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["ID_Perro"]) . "</td>";
                        echo "<td class='border border-sky-600 px-18 py-2 text-center'>" . htmlspecialchars($fila["Fecha"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Incidencias"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Precio_Final"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Dni"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>
            <form><button class='p-1 text-white bg-red-500 rounded' name='submit' value='" . $fila["Sr_Cod"] . "'>
                BORRAR
            </button></form>
          </td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <a href="./select.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>