<?php
$url = 'http://localhost/Proyecto_final_dwes/backend/?ruta=empleados';
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
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Rol</th>
                    <th class="px-4 py-2 text-left">Profesión</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $empleados) : ?>
                    <tr class="border-b hover:bg-blue-100">
                        <td class="px-4 py-2"><?php echo($empleados['dni']) ?></td>
                        <td class="px-4 py-2"><?php echo($empleados['nombre'] . " " . $empleados['apellido1']) ?></td>
                        <td class="px-4 py-2"><?php echo($empleados['email']) ?></td>
                        <td class="px-4 py-2"><?php echo($empleados['rol']) ?></td>
                        <td class="px-4 py-2"><?php echo($empleados['profesion']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
