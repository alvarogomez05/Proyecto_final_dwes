<?php
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    $url = "http://localhost/Proyecto_final_dwes/backend/?ruta=empleados&dni=" . urlencode($dni);

    $options = array(
        "http" => array(
            "header" => "Content-Type: application/json",
            "method" => "DELETE"
        )
    );

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === FALSE) {
        $mensaje = "Error al eliminar el empleado.";
        $tipo = "error";
    } else {
        $mensaje = "Empleado eliminado correctamente.";
        $tipo = "success";
    }
} else {
    $mensaje = "DNI no proporcionado.";
    $tipo = "error";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Empleado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-900">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg text-center">
        <h1 class="text-2xl font-bold text-blue-700 mb-4">Eliminar Empleado</h1>

        <p class="text-lg <?= ($tipo === 'success') ? 'text-green-600' : 'text-red-600' ?>">
            <?= htmlspecialchars($mensaje) ?>
        </p>

        <div class="mt-6">
            <a href="listar.php" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-700">
                Volver a la Lista
            </a>
        </div>
    </div>
</body>
</html>
