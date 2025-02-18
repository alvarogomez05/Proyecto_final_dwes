<?php

// empleadoRoutes.php
require_once 'controllers/empleadosController.php';

$GLOBALS['EmpleadosController'] = new EmpleadosController();

function empleadoRouter($method)
{

    $EmpleadosController = $GLOBALS['EmpleadosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                echo json_encode($EmpleadosController->getEmpleadoId($_GET['id']));
            } else {
                echo json_encode($EmpleadosController->getEmpleados());
            }
            break;
        case 'POST':
            // $dni, $email, $password, $rol, $nombre, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion
            $EmpleadosController->createEmpleado();
            break;
        case 'DELETE':
            $EmpleadosController->deleteEmpleado($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
