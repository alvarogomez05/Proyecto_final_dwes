<?php
// URL de la API donde se registrarán los empleados
$url = 'http://localhost/Proyecto%20APIS/backend/?ruta=empleados';

// Recibir datos del formulario
$dni = $_GET['dni'] ?? '';
$email = $_GET['email'] ?? '';
$password = password_hash($_GET['password'] ?? '', PASSWORD_DEFAULT);
$rol = $_GET['rol'] ?? '';
$nombre = $_GET['nombre'] ?? '';
$apellido1 = $_GET['apellido1'] ?? '';
$apellido2 = $_GET['apellido2'] ?? '';
$calle = $_GET['calle'] ?? '';
$numero = $_GET['numero'] ?? '';
$cp = $_GET['cp'] ?? '';
$poblacion = $_GET['poblacion'] ?? '';
$provincia = $_GET['provincia'] ?? '';
$tlfno = $_GET['tlfno'] ?? '';
$profesion = $_GET['profesion'] ?? '';
// Construir la URL con los parámetros
$url .= '&dni=' . urlencode($dni);
$url .= '&email=' . urlencode($email);
$url .= '&password=' . urlencode($password);
$url .= '&rol=' . urlencode($rol);
$url .= '&nombre=' . urlencode($nombre);
$url .= '&apellido1=' . urlencode($apellido1);
$url .= '&apellido2=' . urlencode($apellido2);
$url .= '&calle=' . urlencode($calle);
$url .= '&numero=' . urlencode($numero);
$url .= '&cp=' . urlencode($cp);
$url .= '&poblacion=' . urlencode($poblacion);
$url .= '&provincia=' . urlencode($provincia);
$url .= '&tlfno=' . urlencode($tlfno);
$url .= '&profesion=' . urlencode($profesion);

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