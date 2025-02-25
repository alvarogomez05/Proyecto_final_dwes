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
            $EmpleadosController->createEmpleado(
                $_GET['dni'], 
                $_GET['email'], 
                $_GET['password'], 
                $_GET['rol'], 
                $_GET['nombre'], 
                $_GET['apellido1'], 
                $_GET['apellido2'], 
                $_GET['calle'], 
                $_GET['numero'], 
                $_GET['cp'], 
                $_GET['poblacion'], 
                $_GET['provincia'], 
                $_GET['tlfno'], 
                $_GET['profesion']
            );
            break;
        case 'DELETE':
            $EmpleadosController->deleteEmpleado($_GET['dni']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
