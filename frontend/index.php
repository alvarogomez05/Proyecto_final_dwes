<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetVet - Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/img/favi.jpg" type="image/x-icon">
</head>

<body class="flex flex-col min-h-screen bg-gray-100 bg-[url('./assets/img/bg2.jpg')] bg-blend-overlay bg-center">
    <!-- Header -->
    <header class="bg-sky-700 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold  ">PetVet</h1>

            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:underline">Inicio</a></li>
                    <li><a href="#" class="hover:underline">Servicios</a></li>
                    <li><a href="#" class="hover:underline">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-1 items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesión</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700">Correo Electrónico</label>
                    <input type="email" class="w-full p-2 border rounded" placeholder="email@email.com" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Contraseña</label>
                    <input type="password" class="w-full p-2 border rounded" placeholder="********" />
                </div>
                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Entrar</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center p-4 mt-4">
        <p>&copy; 2025 PetVet - Todos los derechos reservados.</p>
        <nav class="mt-2">
            <a href="#" class="mx-2 hover:underline">Aviso Legal</a>
            <a href="#" class="mx-2 hover:underline">Política de Privacidad</a>
            <a href="#" class="mx-2 hover:underline">Términos y Condiciones</a>
        </nav>
    </footer>
</body>

</html>