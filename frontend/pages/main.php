<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Veterinaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .box {
            border: 2px solid rgb(112, 132, 199);
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
        }

        .box h2 {
            color: #1E3A8A;
        }
    </style>
</head>

<body class="bg-sky-100 text-white h-screen flex flex-col">
<header class="bg-sky-600 p-5 flex items-center justify-between shadow-md">
    <div class="flex items-center space-x-4">
        <img src="../assets/img/PRqH.gif" alt="Foto de usuario" class="w-12 h-12 rounded-full border-2 border-white">
        <div>
            <h3 class="text-lg font-bold">Nombre Usuario</h3>
            <!-- <?php
            session_start();
            $dni = $_SESSION['dni'];
            echo "<p>$dni</p>";
            ?> -->
            <p class="text-sm text-gray-300">Profesión</p>
        </div>
    </div>
    <div>
        <a href="logout.php" class="bg-white text-sky-600 hover:bg-gray-200 px-4 py-2 rounded transition duration-200">Logout</a>
    </div>
</header>


    <main class="flex-1 p-10 flex justify-center items-center">
        <div class="grid grid-cols-5 gap-8 w-full max-w-6xl">
            <!-- Botón Servicios -->
            <a href="./Servicios/SelectServicios.php" class="flex flex-col items-center box">
                <img src="../assets/img/main7.png" alt="Servicios" class="w-48 h-48 object-cover rounded-lg shadow-md">
                <h2 class="text-xl font-bold mt-3">Servicios</h2>
            </a>
            <!-- Botón Clientes -->
            <a href="./Clientes/listarClientes.php" class="flex flex-col items-center box">
                <img src="../assets/img/main2.jpg" alt="Clientes" class="w-48 h-48 object-cover rounded-lg shadow-md">
                <h2 class="text-xl font-bold mt-3">Clientes</h2>
            </a>
            <!-- Botón Perros -->
            <a href="./Perros/listarPerrosView.php" class="flex flex-col items-center box">
                <img src="../assets/img/main4.webp" alt="Perros" class="w-48 h-48 object-cover rounded-lg shadow-md">
                <h2 class="text-xl font-bold mt-3">Perros</h2>
            </a>
            <!-- Botón Servicios Realizados -->
            <a href="./Servicios Realizados/select.php" class="flex flex-col items-center box">
                <img src="../assets/img/mainsv.jpg" alt="Servicios Realizados" class="w-48 h-48 object-cover rounded-lg shadow-md">
                <h2 class="text-xl font-bold mt-3 text-center">Servicios Realizados</h2>
            </a>
            <!-- Botón Empleados -->
            <a href="./Empleados/viewListarEmpleado.php" class="flex flex-col items-center box">
                <img src="../assets/img/main3.jpg" alt="Empleados" class="w-48 h-48 object-cover rounded-lg shadow-md">
                <h2 class="text-xl font-bold mt-3">Empleados</h2>
            </a>
        </div>
    </main>


    <!-- Footer -->
    <footer class=" bg-sky-600 text-white text-center p-4 mt-4">
        <p>&copy; 2025 PetVet - Todos los derechos reservados.</p>
        <nav class="mt-2">
            <a href="#" class="mx-2 hover:underline">Aviso Legal</a>
            <a href="#" class="mx-2 hover:underline">Política de Privacidad</a>
            <a href="#" class="mx-2 hover:underline">Términos y Condiciones</a>
        </nav>
    </footer>
</body>

</html>