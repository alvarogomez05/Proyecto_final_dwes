<?php

require_once 'controllers/prsController.php';

$GLOBALS['PrsController'] = new PrsController();


function prsRouter($method)
{

    $PrsController = $GLOBALS['PrsController'];

    switch ($method) {
        case 'GET':
            if (isset($_GET['dni'])) {
                echo json_encode($PrsController->getByDni($_GET['dni']));
            } else {
                echo json_encode($PrsController->getAll());
            }
            break;
        case 'POST':
            // $id, $nombre, $raza, $edad, $dni_cliente
            $PrsController->save($_GET['srCod'], $_GET['codServicio'], $_GET['idPerro'], $_GET['fecha'], $_GET['incidencias'], $_GET['dni']);
            break;
        case 'DELETE':
            $PrsController->delete($_GET['srCod']);
            break;
        default:
            echo 'Método no permitido';
            break;
    }
}
