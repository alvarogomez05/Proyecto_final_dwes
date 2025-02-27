<?php

// session_start();
if (isset($_POST['submit'])) {
    $url = 'http://localhost/perros/backend/?ruta=empleados';
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $users = [];

    foreach ($data as $user) {
        // $users[$user['email']] = $user['password'] ;
        // Guardamos en formato [email => password]

        $users[$user['email']] = [
            'password' => $user['password'],
            'rol' => $user['rol'],  // Guardamos también el rol
            'dni'=>$user['dni']//Guardamos el DNI
        ];
    }

    //Guardamos en la sesion el usuario que se ha metido
    session_start();
    $_SESSION['users'] = $users;


    //Comprobamos el usuario y contraseña
    // Recibir datos del formulario
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    //Recojo el DNI para poder usarlo posteriormente
    $_SESSION['dni'] = $users[$email]['dni'];
    $_SESSION['rol'] = $users[$email]['rol'];
    echo "COntraseña de ese usuario es: " . $password;
    // Validar si el usuario existe
    if (isset($users[$email])) {
        // $storedPassword = $users[$email]; // Obtener la contraseña guardada
        $storedPassword = $users[$email]['password'];
        $rol = $users[$email]['rol'];
        // Comparar contraseña (Si está en texto plano, usa ===. Si está hasheada, usa password_verify)
        if (password_verify($password, $storedPassword)) {
            $_SESSION['user'] = $email; // Guardar sesión del usuario
            echo "Inicio de sesión exitoso. ¡Bienvenido, $email!";
            // Redirigir a un dashboard u otra página
            if ($rol === 'ADMIN') {
                header("Location: ./pages/main.php");
            } else {
                header("Location: ./pages/mainEmpleados.php");
            }
        } else {
       
            echo "<script>alert('Credenciales Erróneas'); window.location.href = './../frontend/index.php';</script>";
        }
    } else {
        echo "Error: Usuario no encontrado.";
    }
}
