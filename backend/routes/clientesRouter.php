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
            if (isset($_GET['id'])) {
                $ClientesController->getClientesDNI($_GET['dni']);
            } else {
                // echo 'QUIERES HACER UNA PETICION PARA RECUPAR TODOS LOS CLIENTES';
                $ClientesController->getClientes();
            }
            break;
        case 'POST':
            // pasarle todos los valores por "params" con GET
            $ClientesController->guardarCliente();
            break;
        case 'DELETE':
            $ClientesController->borrarCliente($_GET['dni']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
