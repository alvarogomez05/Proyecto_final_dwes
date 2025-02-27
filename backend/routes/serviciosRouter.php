<?php

// servicioRoutes.php
require_once 'controllers/serviciosController.php';

$GLOBALS['ServiciosController'] = new ServiciosController();

function servicioRouter($method)
{

    $ServiciosController = $GLOBALS['ServiciosController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['codigo'])) {
                echo json_encode($ServiciosController->getServicioId($_GET['codigo']));
            } else {
                echo json_encode($ServiciosController->getServicios());
            }
            break;
        case 'POST':
            // $id,$nombre,$precio
            $ServiciosController->guardarServicio($_GET['codigo'],$_GET['nombre'],$_GET['precio'],$_GET['desc']);
            break;
        case 'PUT':
            $ServiciosController->actualizarServicio($_GET['codigo'], $_GET['precio']);
            break;
        case 'DELETE':
            $ServiciosController->borrarServicio($_GET['codigo']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
