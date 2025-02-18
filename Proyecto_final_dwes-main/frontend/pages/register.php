<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetVet - Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/img/favi.jpg" type="image/x-icon">
</head>

<body class="flex flex-col min-h-screen bg-gray-100 bg-[url('./assets/img/bg2.jpg')] bg-blend-overlay bg-center">
    <!-- Header -->
    <header class="bg-sky-700 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">PetVet</h1>

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
            <h2 class="text-2xl font-bold text-center mb-6">Registro</h2>
            <form method="GET" action="">
                <div class="mb-4">
                    <label class="block text-gray-700">DNI</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="12345678A" name="dni" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Correo Electrónico</label>
                    <input type="email" class="w-full p-2 border rounded" placeholder="email@email.com" name="email" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Contraseña</label>
                    <input type="password" class="w-full p-2 border rounded" placeholder="********" name="password" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Rol</label>
                    <select class="w-full p-2 border rounded" name="rol" required>
                        <option value="AUXILIAR">AUXILIAR</option>
                        <option value="EMPLEADO">EMPLEADO</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nombre</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Nombre" name="nombre" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Apellido 1</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Apellido 1" name="apellido1" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Apellido 2</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Apellido 2" name="apellido2" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Calle</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Calle" name="calle" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Número</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Número" name="numero" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">CP</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Código Postal" name="cp" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Población</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Población" name="poblacion" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Provincia</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Provincia" name="provincia" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Teléfono</label>
                    <input type="text" class="w-full p-2 border rounded" placeholder="Teléfono" name="tlfno" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Profesión</label>
                    <select class="w-full p-2 border rounded" name="profesion">
                        <option value="NUTRICIONISTA">NUTRICIONISTA</option>
                        <option value="ESTILISTA">ESTILISTA</option>
                        <option value="AUXILIAR">AUXILIAR</option>
                        <option value="ATT.CLIENTE">ATT.CLIENTE</option>
                    </select>
                </div>
                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Registrar</button>
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
    <?php
    require_once  '../controllers/registerController.php';
    ?>
</body>

</html>