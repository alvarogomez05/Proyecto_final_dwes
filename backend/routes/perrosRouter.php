<?php
// perroRoutes.php
require_once 'controllers/perrosController.php';

$GLOBALS['PerrosController'] = new PerrosController();


function perroRouter($method)
{
    $PerrosController = $GLOBALS['PerrosController'];

    switch ($method) {

        case 'GET':
            if (isset($_GET['id'])) {
                echo json_encode($PerrosController->getPerroId($_GET['id']));
            } else {
                echo json_encode($PerrosController->getPerros());
            }
            break;

        case 'POST':
            
            if (
                isset($_GET['nombre'], $_GET['raza'], $_GET['fechaNto'], $_GET['dni_cliente'], 
                      $_GET['peso'], $_GET['altura'], $_GET['observaciones'], $_GET['numero_chip'], $_GET['sexo'])
            ) {
                 $PerrosController->guardarPerro(
                    $_GET['nombre'],
                    $_GET['raza'],
                    $_GET['fechaNto'],
                    $_GET['dni_cliente'],
                    $_GET['peso'],
                    $_GET['altura'],
                    $_GET['observaciones'],
                    $_GET['numero_chip'],
                    $_GET['sexo'] );
                
                    // echo json_encode([
                    //     "nombre" => $_GET['nombre'],
                    //     "raza" => $_GET['raza'],
                    //     "fechaNto" => $_GET['fechaNto'],
                    //     "dni_cliente" => $_GET['dni_cliente'],
                    //     "peso" => $_GET['peso'],
                    //     "altura" => $_GET['altura'],
                    //     "observaciones" => $_GET['observaciones'],
                    //     "numero_chip" => $_GET['numero_chip'],
                    //     "sexo" => $_GET['sexo']
                    // ]);
            } else {
                echo json_encode(["error" => "Faltan datos obligatorios"]);
            }
            break;

        case 'DELETE':
            if (isset($_GET['id'])) {
                echo json_encode($PerrosController->borrarPerro($_GET['id']));
            } else {
                echo json_encode(["error" => "Falta el ID"]);
            }
            break;

        default:
            echo json_encode(["error" => "Método no permitido"]);
            break;
    }
}

