<?php
      require_once './../../controllers/Empleados/eliminarEmpleado.php';
    ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10 bg-cover bg-center bg-blend-overlay" style="background-image: url('./../../assets/img/bg2.jpg');">

    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center text-sky-700 mb-6">Borrar Empleados</h1>

        <div class="overflow-x-auto">
            <table class=" text-sm pb-8 bg-white border border-gray-300 shadow-md rounded-lg">
                <thead class="bg-sky-700 text-white">
                    <tr>
                      <th class="py-1 px-2 text-left">DNI</th>
                      <th class="py-1 px-2 text-left">Nombre</th>
                      <th class="py-1 px-2 text-left">Apellido1</th>
                      <th class="py-1 px-2 text-left">Apellido2</th>  
                      <th class="py-1 px-2 text-left">Rol</th>
                      <th class="py-1 px-2 text-left">Profesión</th>
                      <th class="py-1 px-2 text-left">Calle</th>
                      <th class="py-1 px-2 text-left">Número</th>
                      <th class="py-1 px-2 text-left">Código Postal</th>
                      <th class="py-1 px-2 text-left">Población</th>
                      <th class="py-1 px-2 text-left">Provincia</th>
                      <th class="py-1 px-2 text-left">Teléfono</th>
                        <th class="py-1 px-2 text-left">Borrar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    $url = 'http://localhost/Proyecto_final_dwes/backend/?ruta=empleados';
                    $response = file_get_contents($url);
                    $data = json_decode($response, true);
                    if (!empty($data)) {
                        foreach ($data as $empleados) {
                            echo "<tr class='hover:bg-gray-100'>";
                            echo "<td class='py-1 px-2 border'>{$empleados['dni']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['nombre']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['apellido1']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['apellido2']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['rol']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['profesion']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['calle']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['numero']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['cp']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['poblacion']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['provincia']}</td>";
                            echo "<td class='py-1 px-2 border'>{$empleados['tlfno']}</td>";
                            echo "<td class='py-1 px-2 border'>
                                    <form action='viewEliminarEmpleado.php'>
                                        <button type='text' name='dni' value='{$empleados['dni']}' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>
                                            Borrar
                                        </button>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center py-4 text-red-500 font-bold'>No hay datos disponibles</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="mt-8">
                    <p class="text-white">.</p>
            </div>
        </div>
    </div>
    <a href="./viewListarEmpleado.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
    
</body>

</html>