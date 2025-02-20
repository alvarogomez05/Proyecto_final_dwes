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
                $perro = $PerrosController->getPerroId($_GET['id']);
                if ($perro) {
                    echo json_encode($perro);
                } else {
                    http_response_code(404);
                    echo json_encode(['message' => 'Perro no encontrado.']);
                }
            } else {
                $perros = $PerrosController->getPerros();
                echo json_encode($perros);
            }
            break;

        case 'POST':
            // Verificar que todos los parámetros estén presentes
            if (isset($_POST['nombre'], $_POST['raza'], $_POST['edad'], $_POST['dni_cliente'])) {
                $resultado = $PerrosController->guardarPerro(
                    $_POST['nombre'],
                    $_POST['raza'],
                    $_POST['edad'],
                    $_POST['dni_cliente']
                );

                if ($resultado) {
                    http_response_code(201); // Creado
                    echo json_encode(['message' => 'Perro registrado exitosamente.']);
                } else {
                    http_response_code(500); // Error interno
                    echo json_encode(['message' => 'Error al registrar el perro.']);
                }
            } else {
                http_response_code(400); // Solicitud incorrecta
                echo json_encode(['message' => 'Error: Todos los campos son obligatorios.']);
            }
            break;

        case 'DELETE':
            if (isset($_GET['id'])) {
                $resultado = $PerrosController->borrarPerro($_GET['id']);
                if ($resultado) {
                    echo json_encode(['message' => 'Perro eliminado exitosamente.']);
                } else {
                    http_response_code(404); // No encontrado
                    echo json_encode(['message' => 'Perro no encontrado para eliminar.']);
                }
            } else {
                http_response_code(400); // Solicitud incorrecta
                echo json_encode(['message' => 'Error: ID del perro es necesario para eliminar.']);
            }
            break;

        default:
            http_response_code(405); // Método no permitido
            echo json_encode(['message' => 'Método no permitido.']);
            break;
    }
}
