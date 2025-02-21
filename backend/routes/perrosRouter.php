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
                
                echo json_encode(["message" => $_GET['nombre'],
                $_GET['raza'],
                $_GET['fechaNto'],
                $_GET['dni_cliente'],
                $_GET['peso'],
                $_GET['altura'],
                $_GET['observaciones'],
                $_GET['numero_chip'],
                $_GET['sexo']  ]);
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

