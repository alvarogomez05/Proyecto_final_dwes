<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetVet - Registro de Perros</title>
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
        <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-4xl">
            <h2 class="text-3xl font-bold text-center text-sky-700 mb-6">Insertar Perro</h2>

            <!-- Mensajes de éxito o error -->
            <?php if (isset($mensaje)): ?>
                <div class="mb-4 text-red-600 text-center">
                    <?= $mensaje; ?>
                </div>
            <?php endif; ?>

            <form method="GET" action="./../../controllers/Perros/insertarPerroController.php" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">DNI Cliente</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="DNI del Cliente" name="dni_cliente" required aria-label="DNI del Cliente" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Nombre</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Nombre del perro" name="nombre" required aria-label="Nombre del perro" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Fecha de Nacimiento</label>
                        <input type="date" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" name="fecha_nto" required aria-label="Fecha de Nacimiento" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Raza</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Raza del perro" name="raza" required aria-label="Raza del perro" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Peso (kg)</label>
                        <input type="number" step="0.1" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Peso" name="peso" required aria-label="Peso" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Altura (cm)</label>
                        <input type="number" step="0.1" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Altura" name="altura" required aria-label="Altura" />
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Observaciones</label>
                    <textarea class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Observaciones" name="observaciones" aria-label="Observaciones"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Número de Chip</label>
                        <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" placeholder="Número de chip" name="numero_chip" required aria-label="Número de Chip" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Sexo</label>
                        <select name="sexo" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-sky-500" required aria-label="Sexo">
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                        </select>
                    </div>
                </div>
                <button class="w-full bg-sky-700 text-white py-3 rounded-lg mt-6 font-semibold hover:bg-sky-800 transition duration-300">Registrar</button>
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

    <a href="./../main.php" class="fixed right-10 bottom-10 w-36 bg-yellow-500 hover:bg-yellow-700 text-center text-white font-bold py-2 px-4 rounded-lg">
        Volver
    </a>
</body>

</html>

