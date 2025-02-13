<?php
// perroRoutes.php
require_once 'controllers/PerroController.php';

$GLOBALS['PerrosController'] = new PerrosController();


function perroRouter($method)
{

    $PerrosController = $GLOBALS['PerrosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                $PerrosController->getPerroById($_GET['id']);
            } else {
                $PerrosController->getAllPerros();
            }
            break;
        case 'POST':
            $PerrosController->createPerro();
            break;
        case 'PUT':
            $PerrosController->updatePerro($_GET['id']);
            break;
        case 'DELETE':
            $PerrosController->deletePerro($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
