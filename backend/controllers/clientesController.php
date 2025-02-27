<?php
require_once __DIR__ . '/../services/clientesService.php';

class ClientesController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new ClientesService();
    }

    //Función para listar todo los clientes
    public function getClientes()
    {


    

        return   $this->userService->obtenerTodosLosClientes();
    }
    //Funcion para listar los clientes por DNI
    public function getClientesDNI($dni)
    {
        return  $this->userService->obtenerClientePorDni($dni);
    }

    //Funcion para guardar el Cliente

    public function guardarCliente($dni, $nombre, $apellido1, $apellido2, $direccion, $tlfno){

        $url = 'http://localhost/perros/backend/?ruta=clientes';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        foreach ($data as $clientes) {
            if ($clientes['dni'] == $dni) {
                http_response_code(400);
                return json_encode(["error" => "El DNI ya existe"]);
                
            }
        }

        return $this->userService->guardarCliente($dni, $nombre, $apellido1, $apellido2, $direccion, $tlfno);
    }
    //Funcion para borrar los clientes por DNI
    public function borrarCliente($dni){

       


       
            return $this->userService->borrarCliente($dni);
       
    
        

    }
}
