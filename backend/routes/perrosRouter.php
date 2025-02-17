<?php
// perroRoutes.php
require_once 'controllers/perrosController.php';

$GLOBALS['PerrosController'] = new PerrosController();


function perroRouter($method)
{

    $PerrosController = $GLOBALS['PerrosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
               echo json_encode($PerrosController->getPerroId($_GET['id']));
            } else {
               echo json_encode($PerrosController->getPerros());
            }
            break;
        case 'POST':
            // $id, $nombre, $raza, $edad, $dni_cliente
            $PerrosController->guardarPerro();
            break;
        case 'DELETE':
            $PerrosController->borrarPerro($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
