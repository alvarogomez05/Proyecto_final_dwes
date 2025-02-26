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
                $response = $PerrosController->getPerroId($_GET['id']);
            } else {
                $response = $PerrosController->getPerros();
            }
            echo json_encode($response);
            break;


        case 'POST':

            // Si recibe todos los datos por GET, lo interpreta como un "POST" para guardar un nuevo perro.
            if (isset($_GET['dni_cliente'], $_GET['nombre'], $_GET['raza'], $_GET['FechaNto'], $_GET['peso'], $_GET['altura'], $_GET['observaciones'], $_GET['numero_chip'], $_GET['sexo'])) {

               /*  // Validar que los campos no estén vacíos
                $requiredFields = ['dni_cliente', 'nombre', 'FechaNto', 'raza', 'peso', 'altura', 'observaciones', 'numero_chip', 'sexo'];
                foreach ($requiredFields as $field) {
                    if (empty($_GET[$field])) {
                        http_response_code(400);
                        echo json_encode(["error" => "Falta el campo obligatorio: $field"]);
                        return;
                    }
                } */

                // Guardar el perro
                $resultado = $PerrosController->guardarPerro(
                    $_GET['dni_cliente'],
                    $_GET['nombre'],
                    $_GET['FechaNto'],
                    $_GET['raza'],
                    $_GET['peso'],
                    $_GET['altura'],
                    $_GET['observaciones'],
                    $_GET['numero_chip'],
                    $_GET['sexo']
                );

                if ($resultado) {
                    http_response_code(201);
                    echo json_encode(["message" => "Perro guardado con éxito", "id" => $resultado]);
                } else {
                    http_response_code(500);
                    echo json_encode(["error" => "No se pudo guardar el perro"]);
                }
            }



            
            break;

        case 'DELETE':
            if (isset($_GET['id'])) {
                $resultado = $PerrosController->borrarPerro($_GET['id']);
                if ($resultado) {
                    echo json_encode(["message" => "Perro eliminado"]);
                } else {
                    http_response_code(500);
                    echo json_encode(["error" => "Error al eliminar el perro"]);
                }
            } else {
                http_response_code(400);
                echo json_encode(["error" => "Falta el ID"]);
            }
            break;



        default:
            http_response_code(405);
            echo json_encode(["error" => "Método no permitido"]);
            break;
    }
}