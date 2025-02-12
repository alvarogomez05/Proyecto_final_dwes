<?php
// importamos el archivos de conexion a la base de datos
require_once './core/bd.php';
// creamos una variable para instaciar la clase BD
$BD = new BD();
// llamamos a la función para implementar la conexion
$conexion = $BD->getConexion();


// indexRouter.php
require_once './routes/serviciosRouter.php';
require_once './routes/empleadosRouter.php';
require_once './routes/clientesRouter.php';
require_once './routes/perrosRouter.php';

// Obtener la ruta y el método de la solicitud
$request_uri = $_SERVER['REQUEST_URI'];  // Puede incluir el query string
$method = $_SERVER['REQUEST_METHOD'];  // GET, POST, PUT, DELETE

// Eliminar la parte del dominio en la URI
$request_uri = parse_url($request_uri, PHP_URL_PATH);

// Enrutador basado en el URI
switch ($request_uri) {
    case '/servicios':
        servicioRouter($method);
        break;
    case '/empleados':
        empleadoRouter($method);
        break;
    case '/perros':
        perroRouter($method);
        break;
    case '/clientes':
        clienteRouter($method);
        break;
    default:
        echo '404 Not Found';
        break;
}
