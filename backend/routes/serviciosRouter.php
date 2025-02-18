<?php

// servicioRoutes.php
require_once 'controllers/serviciosController.php';

$GLOBALS['ServiciosController'] = new ServiciosController();

function servicioRouter($method)
{

    $ServiciosController = $GLOBALS['ServiciosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                echo json_encode($ServiciosController->getServicioId($_GET['id']));
            } else {
                echo json_encode($ServiciosController->getServicios());
            }
            break;
        case 'POST':
            // $id,$nombre,$precio
            $ServiciosController->guardarServicio();
            break;
        case 'PUT':
            $ServiciosController->actualizarServicio($_GET['id'], $_GET['precio']);
            break;
        case 'DELETE':
            $ServiciosController->borrarServicio($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
