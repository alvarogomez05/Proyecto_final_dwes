<?php

// clienteRoutes.php
require_once 'controllers/ClienteController.php';

function clienteRouter($method)
{
    switch ($method) {
        case 'GET':
            if (isset($_GET['id'])) {
                ClienteController::getClienteById($_GET['id']);
            } else {
                ClienteController::getAllClientes();
            }
            break;
        case 'POST':
            ClienteController::createCliente();
            break;
        case 'PUT':
            ClienteController::updateCliente($_GET['id']);
            break;
        case 'DELETE':
            ClienteController::deleteCliente($_GET['id']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
