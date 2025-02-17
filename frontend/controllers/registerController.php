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

// Validar que todos los campos requeridos estén completos
if ($dni && $email && $password && $rol && $nombre && $apellido1 && $calle && $numero && $cp && $poblacion && $provincia && $tlfno) {
    // Datos del nuevo empleado
    $newUser = [
        'dni' => $dni,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
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

    // Inicializar cURL
    $conexion = curl_init();
    curl_setopt($conexion, CURLOPT_URL, $url);
    curl_setopt($conexion, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data)
    ]);
    curl_setopt($conexion, CURLOPT_POST, true);
    curl_setopt($conexion, CURLOPT_POSTFIELDS, $data);
    curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar petición y obtener respuesta
    $response = curl_exec($conexion);
    
    // Verificar si hubo error en la petición
    if (curl_errno($conexion)) {
        echo "Error en la petición: " . curl_error($conexion);
    } else {
        echo "Registro exitoso. ¡Bienvenido, $nombre!";
    }
    
    // Cerrar conexión cURL
    curl_close($conexion);
} else {
    echo "Error: Todos los campos requeridos deben estar completos.";
}
?>
