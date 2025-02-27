<?php
session_start();
$dni = $_SESSION['dni'];
$rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Perros</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-gray-900">
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold text-blue-700 mb-4 text-center">Lista de Perros</h1>

    <?php if ($rol === 'ADMIN') { ?>
    <div class='flex justify-left gap-8 mt-8 m-5'>
        <a href='./insertarPerrosView.php' class='w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg'>
            INSERTAR PERRO
        </a>
    </div>
    <?php } ?>

    <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="px-2 py-2 text-center">ID</th>
                <th class="px-6 py-3 text-center">Nombre</th>
                <th class="px-6 py-3 text-center">Raza</th>
                <th class="px-6 py-3 text-center">Fecha de Nacimiento</th>
                <th class="px-6 py-3 text-center">DNI Cliente</th>
                <th class="px-6 py-3 text-center">Peso (kg)</th>
                <th class="px-6 py-3 text-center">Altura (cm)</th>
                <th class="px-6 py-3 text-center">Observaciones</th>
                <th class="px-6 py-3 text-center">Número de Chip</th>
                <th class="px-6 py-3 text-center">Sexo</th>
                <?php if ($rol === 'ADMIN') echo '<th class="px-6 py-3 text-center">Acciones</th>'; ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $url = 'http://localhost/perros/backend/?ruta=perros';
            $response = @file_get_contents($url);

            if ($response === false) {
                echo "<tr><td colspan='11' class='text-center py-4 text-red-500 font-bold'>Error al obtener los datos</td></tr>";
            } else {
                $data = json_decode($response, true);

                if (!empty($data)) {
                    foreach ($data as $datos) {
                        echo "<tr class='border-b hover:bg-blue-100'>";
                        echo "<td class='px-2 py-2 text-center'>{$datos['id']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Nombre']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Raza']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Fecha_Nto']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Dni_Cliente']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Peso']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Altura']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Observaciones']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Numero_Chip']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$datos['Sexo']}</td>";

                        if ($rol === 'ADMIN') {
                            echo "<td class='px-6 py-3 text-center'>
                                    <form action='./../../controllers/Perros/deletePerrosController.php' method='POST'>
                                        <input type='hidden' name='id' value='{$datos['id']}'>
                                        <button type='submit' class='p-2 text-white bg-red-500 hover:bg-red-700 rounded'>BORRAR</button>
                                    </form>
                                  </td>";
                        }
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

    <a href="<?php echo ($rol === 'ADMIN') ? './../main.php' : './../mainEmpleados.php'; ?>" 
       class="fixed right-10 bottom-10 w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        Volver
    </a>
</body>
</html>

