<?php

// clienteRoutes.php
require_once 'controllers/clientesController.php';

$GLOBALS['ClientesController'] = new ClientesController();

function clienteRouter($method)
{

    // echo 'Estas en el ruter de clientes';

    $ClientesController = $GLOBALS['ClientesController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['dni'])) {
                echo json_encode($ClientesController->getClientesDNI($_GET['dni']));
            } else {
                echo json_encode($ClientesController->getClientes());
            }
            break;
        case 'POST':
            // pasarle todos los valores por "params" con GET
            // $dni, $nombre, $apellido1, $apellido2, $direccion, $tlfno
            if (isset($_GET['dni'], $_GET['nombre'], $_GET['apellido1'], $_GET['apellido2'], $_GET['direccion'], $_GET['tlfno'])) {
                $ClientesController->guardarCliente($_GET['dni'], $_GET['nombre'], $_GET['apellido1'], $_GET['apellido2'], $_GET['direccion'], $_GET['tlfno']);
            }
            break;
        case 'DELETE':
            if (isset($_GET['dni'])) {
                $ClientesController->borrarCliente($_GET['dni']);
            }
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
