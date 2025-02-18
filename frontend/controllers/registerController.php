<?php

if (isset($_GET['submit'])) {
// URL base
$url = 'http://localhost/perros/backend/?ruta=empleados';
// Recibir datos del formulario
$dni =$_GET['dni'] ?? '';
$email =$_GET['email'] ?? '';
$password = password_hash($_GET['password'] ?? '', PASSWORD_DEFAULT);

$rol =$_GET['rol'] ?? '';
$nombre =$_GET['nombre'] ?? '';
$apellido1 =$_GET['apellido1'] ?? '';
$apellido2 =$_GET['apellido2'] ?? '';
$calle =$_GET['calle'] ?? '';
$numero =$_GET['numero'] ?? '';
$cp =$_GET['cp'] ?? '';
$poblacion =$_GET['poblacion'] ?? '';
$provincia =$_GET['provincia'] ?? '';
$tlfno =$_GET['tlfno'] ?? '';
$profesion =$_GET['profesion'] ?? '';
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

// Inicializar cURL
$conexion = curl_init();
curl_setopt($conexion, CURLOPT_URL, $url);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
curl_setopt($conexion, CURLOPT_CUSTOMREQUEST, "POST");  // Cambia a GET

// Ejecutar y obtener la respuesta
$response = curl_exec($conexion);
$httpCode = curl_getinfo($conexion, CURLINFO_HTTP_CODE);

if (curl_errno($conexion)) {

    echo "Error en cURL: " . curl_error($conexion);
} else {
    echo "Respuesta de la API: " . $response;
    echo "Código HTTP: " . $httpCode;
}

// Cerrar conexión
curl_close($conexion);

}

?>