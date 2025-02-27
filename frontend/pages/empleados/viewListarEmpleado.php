<?php
session_start(); // Iniciar sesión
require_once './../../controllers/Empleados/eliminarEmpleado.php';
$dni = $_SESSION['dni'];
$rol = $_SESSION['rol'];


$url = 'http://localhost/perros/backend/?ruta=empleados';
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-gray-900">

    <div class="p-6">
        <h1 class="text-2xl font-bold text-blue-700 mb-4 text-center">Lista de Empleados</h1>


        <div class='flex justify-left gap-8 mt-8 m-5'>
            <a href='./viewInsertarEmpleado.php' class='w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg'>
                INSERTAR UN EMPLEADO
            </a>
        </div>

        <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden ">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-2 py-2 text-center">DNI</th>
                    <th class="px-6 py-3 text-center">Nombre</th>
                    <th class="px-6 py-3 text-center">Apellido 1</th>
                    <th class="px-6 py-3 text-center">Apellido 2</th>
                    <th class="px-6 py-3 text-center">Rol</th>
                    <th class="px-6 py-3 text-center">Profesión</th>
                    <th class="px-6 py-3 text-center">Calle</th>
                    <th class="px-6 py-3 text-center">Número</th>
                    <th class="px-6 py-3 text-center">Código Postal</th>
                    <th class="px-6 py-3 text-center">Población</th>
                    <th class="px-6 py-3 text-center">Provincia</th>
                    <th class="px-6 py-3 text-center">Teléfono</th>
                    <?php if ($rol === 'ADMIN') echo '<th class="px-6 py-3 text-center">Acciones</th>'; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data)) {
                    foreach ($data as $empleado) {
                        echo "<tr class='border-b hover:bg-blue-100'>";
                        echo "<td class='px-2 py-2 text-center'>{$empleado['dni']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['nombre']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['apellido1']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['apellido2']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['rol']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['profesion']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['calle']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['numero']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['cp']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['poblacion']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['provincia']}</td>";
                        echo "<td class='px-6 py-3 text-center'>{$empleado['tlfno']}</td>";

                        if ($rol === 'ADMIN') {
                            echo "<td class='px-6 py-3 text-center'>
                                    <form method='GET' action='./../../controllers/Empleados/eliminarEmpleado.php'>
                                        <input type='hidden' name='dni' value='{$empleado['dni']}'>
                                        <button type='submit' class='p-2 text-white bg-red-500 hover:bg-red-700 rounded'>BORRAR</button>
                                    </form>
                                  </td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='13' class='text-center py-4 text-red-500 font-bold'>No hay empleados registrados</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

    </div>


    <a href="<?php echo ($rol === 'ADMIN') ? './../main.php' : './../mainEmpleados.php'; ?>"
        class="fixed right-10 bottom-10 w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        Volver
    </a>

</body>

</html>