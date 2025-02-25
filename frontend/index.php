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
            <h1 class="text-2xl font-bold">PetVet</h1>
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
    <main class="flex flex-1 items-center justify-center">
        <div class="bg-white p-10 rounded-xl shadow-lg w-96">
            <h2 class="text-3xl font-bold text-center mb-6 text-gray-700">Iniciar Sesión</h2>
            <form method="POST" action="">
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Correo Electrónico</label>
                    <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="email@email.com" name="email" required />
                </div>
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                    <input type="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="********" name="password" required />
                </div>
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300" name="submit">Entrar</button>
                <div class="text-center mt-4">
                    <a href="#" class="text-blue-600 hover:underline text-sm">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-gray-600">¿No tienes una cuenta? <a href="./pages/register.php" class="text-blue-600 font-semibold hover:underline">Regístrate</a></p>
                </div>
            </form>
        </div>
    </main>

   

</html>


    <!-- Footer -->
    <footer class=" bg-sky-700 text-white text-center p-4 mt-4">
        <p>&copy; 2025 PetVet - Todos los derechos reservados.</p>
        <nav class="mt-2">
            <a href="#" class="mx-2 hover:underline">Aviso Legal</a>
            <a href="#" class="mx-2 hover:underline">Política de Privacidad</a>
            <a href="#" class="mx-2 hover:underline">Términos y Condiciones</a>
        </nav>
    </footer>
</body>
<?php
//USAR file_get_contents QUE NUESTRA API SI NOS DEJA
require_once __DIR__ . '/controllers/loginController.php';

// ?>

</html>