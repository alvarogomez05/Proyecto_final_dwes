<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = 'http://localhost/Proyecto_final_dwes/backend/?ruta=empleados';
    
    $data = array(
        "DNI" => $_POST['dni'],
        "nombre" => $_POST['nombre'],
        "apellido1" => $_POST['apellido1'],
        "apellido2" => $_POST['apellido2'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "rol" => $_POST['rol'],
        "calle" => $_POST['calle'],
        "numero" => $_POST['numero'],
        "cp" => $_POST['cp'],
        "poblacion" => $_POST['poblacion'],
        "provincia" => $_POST['provincia'],
        "tlfno" => $_POST['tlfno'],
        "profesion" => $_POST['profesion']
    );

    $options = array(
        "http" => array(
            "header" => "Content-Type: application/json",
            "method" => "POST",
            "content" => json_encode($data)
        )
    );

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    
    if ($response === FALSE) {
        echo "<p class='text-red-600'>Error al insertar empleado</p>";
    } else {
        echo "<p class='text-green-600'>Empleado insertado correctamente</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Empleado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-900">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-blue-700 mb-4">Agregar Nuevo Empleado</h1>
        
        <form method="POST" class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="dni" placeholder="DNI" required class="border p-2 rounded">
                <input type="text" name="nombre" placeholder="Nombre" required class="border p-2 rounded">
                <input type="text" name="apellido1" placeholder="Apellido 1" required class="border p-2 rounded">
                <input type="text" name="apellido2" placeholder="Apellido 2" class="border p-2 rounded">
                <input type="email" name="email" placeholder="Email" required class="border p-2 rounded">
                <input type="password" name="password" placeholder="Contraseña" required class="border p-2 rounded">
                
                <select name="rol" required class="border p-2 rounded">
                    <option value="ADMIN">ADMIN</option>
                    <option value="EMPLEADO">EMPLEADO</option>
                </select>
                
                <select name="profesion" required class="border p-2 rounded">
                    <option value="ESTILISTA">Estilista</option>
                    <option value="NUTRICIONISTA">Nutricionista</option>
                    <option value="AUXILIAR">Auxiliar</option>
                    <option value="ATT.CLIENTE">Atención al Cliente</option>
                </select>
                
                <input type="text" name="calle" placeholder="Calle" required class="border p-2 rounded">
                <input type="text" name="numero" placeholder="Número" required class="border p-2 rounded">
                <input type="text" name="cp" placeholder="Código Postal" required class="border p-2 rounded">
                <input type="text" name="poblacion" placeholder="Población" required class="border p-2 rounded">
                <input type="text" name="provincia" placeholder="Provincia" required class="border p-2 rounded">
                <input type="text" name="tlfno" placeholder="Teléfono" required class="border p-2 rounded">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-700">
                Insertar Empleado
            </button>
        </form>

        <div class="mt-6">
            <a href="listar.php" class="text-blue-600 hover:text-blue-800">Volver a la lista</a>
        </div>
    </div>
</body>
</html>
