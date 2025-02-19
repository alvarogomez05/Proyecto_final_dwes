<?php
$url = 'http://localhost/Proyecto%20APIS/backend/?ruta=clientes';
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10 bg-cover bg-center bg-blend-overlay" style="background-image: url('./../../assets/img/bg2.jpg');">

    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center text-sky-700 mb-6">Lista de Clientes</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
                <thead class="bg-sky-700 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">Dni</th>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-left">Apellido1</th>
                        <th class="py-3 px-6 text-left">Apellido2</th>
                        <th class="py-3 px-6 text-left">Direccion</th>
                        <th class="py-3 px-6 text-left">Teléfono</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    if (!empty($data)) {
                        foreach ($data as $datos) {
                            echo "<tr class='hover:bg-gray-100'>";
                            echo "<td class='py-4 px-6 border'>{$datos['dni']}</td>";
                            echo "<td class='py-4 px-6 border'>{$datos['nombre']}</td>";
                            echo "<td class='py-4 px-6 border'>{$datos['apellido1']}</td>";
                            echo "<td class='py-4 px-6 border'>{$datos['apellido2']}</td>";
                            echo "<td class='py-4 px-6 border'>{$datos['direccion']}</td>";
                            echo "<td class='py-4 px-6 border'>{$datos['tlfno']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center py-4 text-red-500 font-bold'>No hay datos disponibles</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>