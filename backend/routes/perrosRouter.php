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
            $PerrosController->guardarPerro();
            break;
        case 'PUT':
            $PerrosController->updatePerro($_GET['id']);
            break;
        case 'DELETE':
            $PerrosController->borrarPerro($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
