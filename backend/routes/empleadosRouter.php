<?php

// empleadoRoutes.php
require_once 'controllers/EmpleadoController.php';

function empleadoRouter($method)
{
    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                EmpleadoController::getEmpleadoById($_GET['id']);
            } else {
                EmpleadoController::getAllEmpleados();
            }
            break;
        case 'POST':
            EmpleadoController::createEmpleado();
            break;
        case 'PUT':
            EmpleadoController::updateEmpleado($_GET['id']);
            break;
        case 'DELETE':
            EmpleadoController::deleteEmpleado($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
