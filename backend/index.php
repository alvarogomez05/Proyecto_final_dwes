<?php
// importamos el archivos de conexion a la base de datos
require_once './core/bd.php';
// creamos una variable para instaciar la clase BD
$BD = new BD();
// llamamos a la función para implementar la conexion
$conexion = $BD->getConexion();


// indexRouter.php
// require_once './routes/serviciosRouter.php';
// require_once './routes/empleadosRouter.php';
require_once './routes/clientesRouter.php';
// require_once './routes/perrosRouter.php';


//Para que nos devuelva los datos en formato json 
// header('Content-Type: application/json'); 
// Obtener el método de la solicitud
$method = $_SERVER['REQUEST_METHOD'];  // GET, POST, PUT, DELETE


// PRUEBAS UNITARIAS PARA EL METODO     
// echo '<br><br>';
// switch ($method) {
//     case 'GET':
//         echo 'esto es una peticion GET';
//         break;
//     case 'POST':
//         echo 'esto es una peticion POST';
//         break;
//     case 'PUT':
//         echo 'esto es una peticion PUT';
//         break;
//     case 'DELETE':
//         echo 'esto es una peticion DELETE';
//         break;
//     default:
//         echo 'METODO NO PERMITIDO';
// }

// ejemplo de ruta a la que hacer la peticion
// http://localhost/dwes/proyecto%20final/backend/?ruta=clientes

// recogemos con el GET
if (isset($_GET['ruta'])) {
    $ruta = $_GET['ruta'];
} else {
    $ruta = 'none';
}

// Enrutador basado en los params que nos mandan en la peticion
switch ($ruta) {
    case 'servicio':
        servicioRouter($method);
        break;
    case 'empleados':
        empleadoRouter($method);
        break;
    case 'perros':
        perroRouter($method);
        break;
    case 'clientes':
        // echo 'Estas haciendo una peticion a clientes';
        clienteRouter($method);
        break;
    default:
        echo '404 Not Found';
        break;
}
