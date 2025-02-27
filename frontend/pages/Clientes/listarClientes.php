<?php
session_start();
$dni = $_SESSION['dni'];
$rol = $_SESSION['rol'];

$url = 'http://localhost/perros/backend/?ruta=clientes';
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-gray-900">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-blue-700 mb-4 text-center">Lista de Clientes</h1>
        
        <?php if ($rol == "ADMIN") { ?>
            <div class='flex justify-left gap-8 mt-8 m-5'>
                <a href='insertarClienteView.php' class='w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg'>
                    INSERTAR CLIENTE
                </a>
            </div>
        <?php } ?>
        
        <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-6 py-3 text-center">DNI</th>
                    <th class="px-6 py-3 text-center">Nombre</th>
                    <th class="px-6 py-3 text-center">Apellido1</th>
                    <th class="px-6 py-3 text-center">Apellido2</th>
                    <th class="px-6 py-3 text-center">Dirección</th>
                    <th class="px-6 py-3 text-center">Teléfono</th>
                    <?php if ($rol == 'ADMIN') echo '<th class="px-6 py-3 text-center">EDITAR</th>'; ?>
                    <th class="px-6 py-3 text-center">VER PERRO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data)) {
                    foreach ($data as $datos) { ?>
                        <tr class="border-b hover:bg-blue-100">
                            <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($datos['dni']); ?></td>
                            <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($datos['nombre']); ?></td>
                            <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($datos['apellido1']); ?></td>
                            <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($datos['apellido2']); ?></td>
                            <td class="px-6 py-3 "><?php echo htmlspecialchars($datos['direccion']); ?></td>
                            <td class="px-6 py-3 text-center"><?php echo htmlspecialchars($datos['tlfno']); ?></td>
                            <?php if ($rol == "ADMIN") { ?>
                                <td class="px-6 py-3 text-center">
                                    <form action='borrarClientes.php' method='GET'>
                                        <button type='submit' name='borrar' value='<?php echo htmlspecialchars($datos['dni']); ?>' class='p-2 text-white bg-red-500 rounded'>BORRAR</button>
                                    </form>
                                </td>
                            <?php } ?>
                            <td class="px-6 py-3 text-center">
                                <form action='verPerroCliente.php' method='GET'>
                                    <button type='submit' name='verPerro' value='<?php echo htmlspecialchars($datos['dni']); ?>' class='p-2 text-white bg-green-500 rounded'>PERROS</button>
                                </form>
                            </td>
                        </tr>
                <?php } } else { ?>
                    <tr>
                        <td colspan='7' class='text-center py-4 text-red-500 font-bold'>No hay datos disponibles</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="<?php echo ($rol === 'ADMIN') ? './../main.php' : './../mainEmpleados.php'; ?>" 
           class="fixed right-10 bottom-10 w-36 bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded-lg">
            VOLVER
        </a>
    </div>
</body>
</html>
