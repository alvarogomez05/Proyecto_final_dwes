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
    <title>Servicios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10 bg-cover bg-center bg-blend-overlay" style="background-image: url('./../../assets/img/bg2.jpg');">

<div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center text-sky-700 mb-6">Lista de Servicios</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
            <thead class="bg-sky-700 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">Código</th>
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Precio</th>
                    <th class="py-3 px-6 text-left">Descripción</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php
                if (!empty($data)) {
                    foreach ($data as $datos) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='py-4 px-6 border'>{$datos['codigo']}</td>";
                        echo "<td class='py-4 px-6 border'>{$datos['nombre']}</td>";
                        echo "<td class='py-4 px-6 border font-bold text-green-600'>\${$datos['precio']}</td>";
                        echo "<td class='py-4 px-6 border'>{$datos['descripcion']}</td>";
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
<a href="<?php echo ($rol === 'ADMIN') ? './../main.php' : './../mainEmpleados.php'; ?>" 
   class="fixed right-10 bottom-10 w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
    Volver
    </a>
</body>
</html>
