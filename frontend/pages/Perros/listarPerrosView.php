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
        <h1 class="text-3xl font-bold text-center text-sky-700 mb-6">Listar Perros</h1>

        <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
        <thead class="bg-sky-700 text-white">
            <tr>
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Raza</th>
                <th class="py-3 px-6 text-left">Fecha de Nacimiento</th>
                <th class="py-3 px-6 text-left">DNI Cliente</th>
                <th class="py-3 px-6 text-left">Peso (kg)</th>
                <th class="py-3 px-6 text-left">Altura (cm)</th>
                <th class="py-3 px-6 text-left">Observaciones</th>
                <th class="py-3 px-6 text-left">Número de Chip</th>
                <th class="py-3 px-6 text-left">Sexo</th>
                <th class="py-3 px-6 text-left">Acción</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <?php
            $url = 'http://localhost/perros/backend/?ruta=perros';
            $response = @file_get_contents($url);

            if ($response === false) {
                echo "<tr><td colspan='11' class='text-center py-4 text-red-500 font-bold'>Error al obtener los datos</td></tr>";
            } else {
                $data = json_decode($response, true);

                if (!empty($data)) {
                    foreach ($data as $datos) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='py-4 px-6 border'>{$datos['id']}</td>";
                        echo "<td class='py-4 px-6 border'>{$datos['Nombre']}</td>";
                        echo "<td class='py-4 px-6 border'>{$datos['Raza']}</td>";
                        echo "<td class='py-4 px-6 border'>{$datos['Fecha_Nto']}</td>"; // Cambié 'edad' por 'fecha_nto'
                        echo "<td class='py-4 px-6 border'>{$datos['Dni_Cliente']}</td>";
                        echo "<td class='py-4 px-6 border'>{$datos['Peso']}</td>"; // Campo Peso
                        echo "<td class='py-4 px-6 border'>{$datos['Altura']}</td>"; // Campo Altura
                        echo "<td class='py-4 px-6 border'>{$datos['Observaciones']}</td>"; // Campo Observaciones
                        echo "<td class='py-4 px-6 border'>{$datos['Numero_Chip']}</td>"; // Campo Número de Chip
                        echo "<td class='py-4 px-6 border'>{$datos['Sexo']}</td>"; // Campo Sexo
                        echo "<td class='py-4 px-6 border'>
                                <form action='./../../controllers/Perros/deletePerrosController.php' method='POST'>
                                    <input type='hidden' name='id' value='{$datos['id']}'>
                                    <button type='submit' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>
                                        Borrar
                                    </button>
                                </form>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='11' class='text-center py-4 text-red-500 font-bold'>No hay datos disponibles</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>


    <a href="./../main.php" class="fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        Volver
    </a>

</body>

</html>
