<?php

// RELLENAR LOS OPTIONS 
// servicios
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=servicios';
$response = file_get_contents($url);
$servicios = json_decode($response, true);

// perros
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=perros';
$response = file_get_contents($url);
$perros = json_decode($response, true);

// empleados
$url = 'http://localhost/dwes/proyecto%20final/backend/?ruta=empleados';
$response = file_get_contents($url);
$empleados = json_decode($response, true);

// HACER UN POST AL ENVIAR EL FORMULARIO



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6 flex justify-center">
    <form class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg border border-sky-700">
        <h2 class="text-xl font-bold text-sky-700 mb-4">Registrar Servicio</h2>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Código de Servicio</label>
            <select required type="text" name="Cod_Servicio" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
                <?php foreach ($servicios as $servicio) {
                    echo "<option value='" . $servicio['codigo'] . "'>" . $servicio['codigo'] . ' - ' . $servicio['nombre'] . "</option>";
                } ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">ID del Perro</label>
            <select required type="number" name="ID_Perro" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
                <?php foreach ($perros as $perro) {
                    echo "<option value='" . $perro['id'] . "'>" . $perro['id'] . ' - ' . $perro['nombre'] . "</option>";
                } ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Fecha</label>
            <input required type="date" name="Fecha" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Incidencias</label>
            <textarea required name="Incidencias" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">DNI</label>
            <!-- si el rol que se registra es admin sera este -->
            <select required type="text" name="Dni" class="border border-sky-600 px-4 py-2 w-full rounded focus:outline-none focus:ring-2 focus:ring-sky-700">
                <?php foreach ($empleados as $empleado) {
                    echo "<option value='" . $empleado['dni'] . "'>" . $empleado['dni'] . ' - ' . $empleado['nombre'] . "</option>";
                } ?>
            </select>
            <!-- si no es admin solo le saldra su dni fijo y fuera -->
        </div>



        <button type="submit" class="bg-sky-700 text-white font-bold px-4 py-2 rounded hover:bg-sky-800 w-full">
            Enviar
        </button>
    </form>
</body>

</html>