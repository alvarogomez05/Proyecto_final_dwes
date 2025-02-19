<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Veterinaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-sky-700 text-white h-screen flex flex-col">
    <header class="bg-sky-800 p-5 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <img src="../assets/img/yae.gif" alt="Foto de usuario" class="w-12 h-12 rounded-full">
            <div>
                <h3 class="text-lg font-bold">Nombre Usuario</h3>
                <p class="text-sm text-gray-300">Profesión</p>
            </div>
        </div>
    </header>
    <main class="flex-1 p-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Columna Insertar -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-sky-800 text-center">
            <h2 class="text-2xl font-bold mb-4">Insertar</h2>
            <a href="insertarClienteView.php" class="block bg-sky-700 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-sky-600 hover:scale-105">Insertar Cliente</a>
            <a href="insertar-perro.html" class="block bg-sky-700 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-sky-600 hover:scale-105">Insertar Perro</a>
            <a href="insertar-empleado.html" class="block bg-sky-700 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-sky-600 hover:scale-105">Insertar Empleado</a>
            <a href="insertar-servicio.html" class="block bg-sky-700 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-sky-600 hover:scale-105">Insertar Servicio</a>

        </div>
        <!-- Columna Borrar -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-sky-800 text-center">
            <h2 class="text-2xl font-bold mb-4">Borrar</h2>
            <a href="borrarView.php" class="block bg-red-600 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-red-500 hover:scale-105">Borrar Cliente</a>
            <a href="borrar-perro.html" class="block bg-red-600 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-red-500 hover:scale-105">Borrar Perro</a>
            <a href="borrar-servicio.html" class="block bg-red-600 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-red-500 hover:scale-105">Borrar Servicio</a>
        </div>
        <!-- Columna Listar -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-sky-800 text-center">
            <h2 class="text-2xl font-bold mb-4">Listar</h2>
            <a href="" class="block bg-green-600 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-green-500 hover:scale-105">Listar Servicios Realizados</a>
            <a href="./Servicios/listarClientes.php" class="block bg-green-600 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-green-500 hover:scale-105">Listar Cliente</a>
            <a href="modificar-precio-servicio.html" class="block bg-yellow-600 text-white font-bold py-2 px-4 rounded mb-3 transition transform hover:bg-yellow-500 hover:scale-105">Modificar Precio Servicio</a>
        </div>
    </main>
</body>

</html>