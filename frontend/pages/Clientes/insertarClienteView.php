<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetVet - Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/img/favi.jpg" type="image/x-icon">
</head>

<body class="flex flex-col min-h-screen bg-gray-100 bg-[url('../assets/img/bg2.jpg')] bg-blend-overlay bg-cover bg-center">
    <!-- Header -->
    <header class="bg-sky-700 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-extrabold">PetVet</h1>
            <nav>
                <ul class="flex space-x-6 text-lg">
                    <li><a href="#" class="hover:underline">Inicio</a></li>
                    <li><a href="#" class="hover:underline">Servicios</a></li>
                    <li><a href="#" class="hover:underline">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-1 items-center justify-center p-6">
        <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-4xl"> <!-- Increased max-width -->
            <h2 class="text-3xl font-bold text-center text-sky-700 mb-6">Insertar Cliente</h2>
            <form method="GET" action="" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">DNI</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="12345678A" name="dni" required />
                    </div>

                </div>


                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Nombre</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Nombre" name="nombre" required />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Apellido 1</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Apellido 1" name="apellido1" required />
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Apellido 2</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Apellido 2" name="apellido2" />
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Direccion</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Apellido 2" name="direccion" />
                </div>
                <div class="grid grid-cols-5 gap-4">

                    <div>
                        <label class="block text-gray-700 font-medium">Teléfono</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Teléfono" name="tlfno" required />
                    </div>
                    <button class="w-full bg-sky-700 text-white py-3 rounded-lg mt-6 font-semibold hover:bg-sky-800 transition duration-300">Crear</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-sky-700 text-white text-center p-6 mt-8 rounded-t-lg">
        <p>&copy; 2025 PetVet - Todos los derechos reservados.</p>
        <nav class="mt-3">
            <a href="#" class="mx-3 hover:underline">Aviso Legal</a>
            <a href="#" class="mx-3 hover:underline">Política de Privacidad</a>
            <a href="#" class="mx-3 hover:underline">Términos y Condiciones</a>
        </nav>
    </footer>

    <?php
    require_once 'insertarClientes.php';
    ?>
    <a href="./../main.php"
        class=" fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        volver
    </a>
</body>

</html>