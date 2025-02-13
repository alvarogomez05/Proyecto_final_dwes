<?php

// empleadoRoutes.php
require_once 'controllers/empleadoController.php';

$GLOBALS['EmpleadosController'] = new EmpleadosController();

function empleadoRouter($method)
{

    $EmpleadosController = $GLOBALS['EmpleadosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                $EmpleadosController->getEmpleadoId($_GET['id']);
            } else {
                $EmpleadosController->getAllEmpleados();
            }
            break;
        case 'POST':
            $EmpleadosController->createEmpleado();
            break;
        case 'PUT':
            $EmpleadosController->updateEmpleado($_GET['id']);
            break;
        case 'DELETE':
            $EmpleadosController->deleteEmpleado($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
