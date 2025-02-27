<?php
session_start();
$dni = $_SESSION['dni'];
$rol = $_SESSION['rol'];

$url = 'http://localhost/perros/backend/?ruta=servicios';
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Servicios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-gray-900">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-blue-700 mb-4 text-center">Lista de Servicios</h1>

        <?php
        if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'ADMIN') :
        ?>
            <div class='flex justify-left gap-8 mt-8 m-5'>
                <a href='./PostServicios.php' class='w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg'>
                    INSERTAR UN SERVICIO
                </a>
            </div>
        <?php endif; ?>


        <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-2 py-2 text-center">Código</th>
                    <th class="px-6 py-3 text-center">Nombre</th>
                    <th class="px-2 py-2 text-center">Precio</th>
                    <th class="px-8 py-3 text-center">Descripción</th>
                    <?php if ($rol === 'ADMIN') echo '<th class="px-6 py-3 text-center">Acciones</th>'; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data)) {
                    foreach ($data as $datos) {
                        echo "<tr class='border-b hover:bg-blue-100'>";
                        echo "<td class='px-2 py-2 text-center'>" . htmlspecialchars($datos['codigo']) . "</td>";
                        echo "<td class='px-6 py-3 text-center'>" . htmlspecialchars($datos['nombre']) . "</td>";
                        echo "<td class='px-2 py-2 text-center font-bold text-green-600'>\$" . htmlspecialchars($datos['precio']) . "</td>";
                        echo "<td class='px-8 py-3 text-center'>" . htmlspecialchars($datos['descripcion']) . "</td>";
                        if ($rol === 'ADMIN') {
                            echo "<td class='px-6 py-3 text-center flex flex-col items-center gap-2'>";
                            echo "<a href='./UpdateServicios.php?codigo=" . htmlspecialchars($datos['codigo']) . "' class='p-2 text-white bg-green-500 rounded w-24 text-center'>MODIFICAR</a>";
                            echo "<form method='GET' action='./../../controllers/Servicios/DeleteServicios.php' class='w-full flex justify-center'>";
                            echo "<input type='hidden' name='codigo' value='" . htmlspecialchars($datos['codigo']) . "'>";
                            echo "<button type='submit' class='p-2 text-white bg-red-500 rounded w-24 text-center'>ELIMINAR</button>";
                            echo "</form>";
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center py-4 text-red-500 font-bold'>No hay datos disponibles</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="<?php echo ($rol === 'ADMIN') ? './../main.php' : './../mainEmpleados.php'; ?>"
            class="fixed right-10 bottom-10 w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
            VOLVER
        </a>
    </div>
</body>

</html>