<?php

session_start();

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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $fila) {
                        // if del dni
                        echo "<tr class='odd:bg-gray-100 even:bg-white hover:bg-sky-100'>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Sr_Cod"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Cod_Servicio"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["ID_Perro"]) . "</td>";
                        echo "<td class='border border-sky-600 px-18 py-2 text-center'>" . htmlspecialchars($fila["Fecha"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Incidencias"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Precio_Final"]) . "</td>";
                        echo "<td class='border border-sky-600 px-4 py-2 text-center'>" . htmlspecialchars($fila["Dni"]) . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- BOTONES -->

    <div class="flex justify-left gap-8 mt-8">
        <!-- todos pueden llegar a insertar un servicio -->
        <a href="./insert.php" class="w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
            Insertar un servicio
        </a>

        <!-- solo el admin puede borrar-->
        <?php

        $_SESSION['rol'] = 'ADMIN';

        if (isset($_SESSION['rol'])) {
            if ($_SESSION['rol'] === 'ADMIN') {
                echo "<a href='./delete.php' class='w-36 bg-red-500 hover:bg-red-700 text-center text-white font-bold py-2 px-4 rounded-lg'>Borrar un servicio</a>";
            }
        }

        ?>

    </div>




    <a href="./../main.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>