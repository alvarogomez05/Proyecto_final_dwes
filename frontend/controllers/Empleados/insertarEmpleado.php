<?php
$url = 'http://localhost/perros/backend/?ruta=empleados';

// Recibir datos del formulario
$dni = $_GET['dni'] ?? '';
$email = $_GET['email'] ?? '';
$password = $_GET['password'] ?? '';
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
$profesion= $_GET['profesion'] ?? '';

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
$url .='&poblacion='. urlencode($poblacion);
$url .= '&provincia=' . urlencode($provincia);
$url .= '&tlfno=' . urlencode($tlfno);
$url .= '&profesion=' . urlencode($profesion);


// Validamos que los campos estén completos
if ($dni && $email  &&  $password && $rol && $nombre && $apellido1 && $apellido2 && $calle && $numero && $cp && $poblacion && $provincia && $tlfno  && $profesion) {
    // Datos nuevos del empleado
    $newUser = [
        'dni' => $dni,
        'email' => $email,
        'password' => $password, 
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

    // Inicializar curl
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
    
    $httpCode = curl_getinfo($conexion, CURLINFO_HTTP_CODE);
    // Verificar si hubo error en la petición
    if ($response === false) {
      echo "<script>alert('Error en la conexión con el servidor.');</script>";
  } else {
      if ($httpCode == 200) {
          echo "<script>alert('Registro exitoso. ¡Registrado {$nombre} con éxito!'); window.location.href = './../../pages/empleados/viewListarEmpleado.php';</script>";
      } elseif ($httpCode == 400) {
          $errorMsg = json_decode($response, true)['error'] ?? 'El cliente ya existe';
          echo "<script>alert('Registro fallido: {$errorMsg}');</script>";
      } else {
          echo "<script>alert('Error inesperado. Código HTTP: {$httpCode}');</script>";
      }
  }
    
    curl_close($conexion);
    header('Location:./../../pages/Empleados/viewListarEmpleado.php');

}
?>