<?php

// servicioRoutes.php
require_once 'controllers/ServicioController.php';

function servicioRouter($method)
{
    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                ServicioController::getServicioById($_GET['id']);
            } else {
                ServicioController::getAllServicios();
            }
            break;
        case 'POST':
            ServicioController::createServicio();
            break;
        case 'PUT':
            ServicioController::updateServicio($_GET['id']);
            break;
        case 'DELETE':
            ServicioController::deleteServicio($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
