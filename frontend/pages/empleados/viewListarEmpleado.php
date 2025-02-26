<?php
$url = 'http://localhost/perros/backend/?ruta=empleados';
$response = file_get_contents($url);
$data = json_decode($response, true);

if (!$data) {
    die("Error al obtener datos de la API.");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-gray-900">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-blue-700 mb-4">Lista de Empleados</h1>

        <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-4 py-2 text-left">DNI</th>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Apellido1</th>
                    <th class="px-4 py-2 text-left">Apellido2</th>
                    <th class="px-4 py-2 text-left">Rol</th>
                    <th class="px-4 py-2 text-left">Profesión</th>
                    <th class="px-4 py-2 text-left">Calle</th>
                    <th class="px-4 py-2 text-left">Número</th>
                    <th class="px-4 py-2 text-left">Código Postal</th>
                    <th class="px-4 py-2 text-left">Población</th>
                    <th class="px-4 py-2 text-left">Provincia</th>
                    <th class="px-4 py-2 text-left">Teléfono</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $empleados) : ?>
                    <tr class="border-b hover:bg-blue-100">
                        <td class="px-2 py-1"><?php echo ($empleados['dni']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['nombre']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['apellido1']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['apellido2']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['rol']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['profesion']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['calle']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['numero']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['cp']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['poblacion']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['provincia']) ?></td>
                        <td class="px-2 py-1"><?php echo ($empleados['tlfno']) ?></td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="mt-8 flex justify-between">
            <a href="viewEliminarEmpleado.php"
                class="w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
                Eliminar
            </a>
            <br>
            <a href="viewInsertarEmpleado.php"
                class="w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
                Insertar
            </a>
        </div>
        <div class="mt-8">
            <p class="text-white">.</p>
        </div>
    </div>

    <a href="./../main.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>