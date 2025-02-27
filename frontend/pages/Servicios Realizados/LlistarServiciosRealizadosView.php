<?php
session_start();
$dni = $_SESSION['dni'];
$rol = $_SESSION['rol'];

$url = 'http://localhost/perros/backend/?ruta=prs';
$response = file_get_contents($url);
$data = json_decode($response, true);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Realizados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-900">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-blue-700 mb-4 text-center">Lista de Servicios Realizados</h1>

        
            <div class='flex justify-left gap-8 mt-8 m-5'>
                <a href='./insert.php' class='w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg'>
                    Insertar un servicio
                </a>
            </div>
        
            <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr class="bg-blue-500 text-white">
            <th class="px-2 py-2 text-center">Cod</th>
            <th class="px-6 py-3 text-center">Código Servicio</th>
            <th class="px-2 py-2 text-center">ID Perro</th>
            <th class="px-8 py-3 text-center">Fecha servicio</th>
            <th class="px-6 py-3 text-center">Incidencias</th>
            <th class="px-6 py-3 text-center">Precio Final</th>
            <th class="px-6 py-3 text-center">DNI</th>
            <?php if ($rol === 'ADMIN') echo '<th class="px-6 py-3 text-center">Acciones</th>'; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $fila) {
            if ($rol === 'ADMIN' || ($rol !== 'ADMIN' && $fila['Dni'] === $dni)) { ?>
                <tr class="border-b hover:bg-blue-100">
                    <td class="px-2 py-2 text-center"><?php echo htmlspecialchars($fila["Sr_Cod"]); ?></td>
                    <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($fila["Cod_Servicio"]); ?></td>
                    <td class="px-2 py-2 text-center"><?php echo htmlspecialchars($fila["ID_Perro"]); ?></td>
                    <td class="px-8 py-3 text-center"><?php echo htmlspecialchars($fila["Fecha"]); ?></td>
                    <td class="px-6 py-3 "><?php echo htmlspecialchars($fila["Incidencias"]); ?></td>
                    <td class="px-6 py-3 text-center font-bold text-green-600">$<?php echo htmlspecialchars($fila["Precio_Final"]); ?></td>
                    <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($fila["Dni"]); ?></td>
                    <?php if ($rol === 'ADMIN') { ?>
                        <td class="px-6 py-3 text-center">
                            <form method='GET' action='./../../controllers/ServiciosRealizados/deleteServiciosRController.php'>
                                <button type='submit' name='submit' value='<?php echo htmlspecialchars($fila["Sr_Cod"]); ?>' class='p-2 text-white bg-red-500 rounded'>BORRAR</button>
                            </form>
                        </td>
                    <?php } ?>
                </tr>
        <?php } } ?>
    </tbody>
</table>



<a href="<?php echo ($rol === 'ADMIN') ? './../main.php' : './../mainEmpleados.php'; ?>" 
   class="fixed right-10 bottom-10 w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
    Volver
</a>


        
    </div>
</body>
</html>
