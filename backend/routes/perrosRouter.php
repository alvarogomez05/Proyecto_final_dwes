<?php
// perroRoutes.php
require_once 'controllers/PerroController.php';

function perroRouter($method)
{
    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                PerroController::getPerroById($_GET['id']);
            } else {
                PerroController::getAllPerros();
            }
            break;
        case 'POST':
            PerroController::createPerro();
            break;
        case 'PUT':
            PerroController::updatePerro($_GET['id']);
            break;
        case 'DELETE':
            PerroController::deletePerro($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
