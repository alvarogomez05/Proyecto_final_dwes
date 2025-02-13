<?php

// servicioRoutes.php
require_once 'controllers/ServicioController.php';

$GLOBALS['ServiciosController'] = new ServiciosController();

function servicioRouter($method)
{

    $ServiciosController = $GLOBALS['ServiciosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                $ServiciosController->getServicioById($_GET['id']);
            } else {
                $ServiciosController->getAllServicios();
            }
            break;
        case 'POST':
            $ServiciosController->createServicio();
            break;
        case 'PUT':
            $ServiciosController->updateServicio($_GET['id']);
            break;
        case 'DELETE':
            $ServiciosController->deleteServicio($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
