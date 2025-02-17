<?php
// URL de la API donde se registrarán los empleados
$url = 'http://localhost/perros/backend/?ruta=empleados';

// Recibir datos del formulario
$dni = $_POST['dni'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$rol = $_POST['rol'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$apellido1 = $_POST['apellido1'] ?? '';
$apellido2 = $_POST['apellido2'] ?? '';
$calle = $_POST['calle'] ?? '';
$numero = $_POST['numero'] ?? '';
$cp = $_POST['cp'] ?? '';
$poblacion = $_POST['poblacion'] ?? '';
$provincia = $_POST['provincia'] ?? '';
$tlfno = $_POST['tlfno'] ?? '';
$profesion = $_POST['profesion'] ?? '';

echo "DNI: $dni, Email: $email, Password: $password, Rol: $rol, Nombre: $nombre, Apellido1: $apellido1, Apellido2: $apellido2, Calle: $calle, Numero: $numero, CP: $cp, Poblacion: $poblacion, Provincia: $provincia, Tlfno: $tlfno, Profesion: $profesion";

// Validar que todos los campos requeridos estén completos
if ($dni && $email && $password && $rol && $nombre && $apellido1 && $calle && $numero && $cp && $poblacion && $provincia && $tlfno) {
    // Datos del nuevo empleado
    $newUser = [
        'dni' => $dni,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT), // Hashear la contraseña antes de enviar
        'rol' => $rol,
        'nombre' => $nombre,
        'apellido1' => $apellido1,
        'apellido2' => $apellido2,
        'calle' => $calle,
        'numero' => $numero,
        'cp' => $cp,
        'poblacion' => $poblacion,
        'provincia' => $provincia,
        'tlfno' => $tlfno,
        'profesion' => $profesion,
    ];

    // Convertir los datos a JSON
    $data = json_encode($newUser);

    // Configurar opciones de la petición
    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ],
    ];

    $context  = stream_context_create($options);

    // Enviar petición a la API
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "Error al registrar el usuario.";
    } else {
        echo "Registro exitoso. ¡Bienvenido, $nombre!";
        // Redirigir a otra página después del registro
        // header("Location: dashboard.php");
    }
} else {
    echo "Error: Todos los campos requeridos deben estar completos.";
}
?>
