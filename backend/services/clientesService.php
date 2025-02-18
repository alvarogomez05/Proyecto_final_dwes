<?php


include_once './database/models/clientesModel.php';

class ClientesService
{

    private $clientesModel;

    public function __construct()
    {
        $this->clientesModel = new ClientesModel();
    }


    public function guardarCliente($dni, $nombre, $apellido1, $apellido2, $direccion, $tlfno)
    {
        return $this->clientesModel->save($dni, $nombre, $apellido1, $apellido2, $direccion, $tlfno);
    }

    public function obtenerClientePorDni($dni)
    {
        return $this->clientesModel->getClienteByDni($dni);
    }


    public function obtenerTodosLosClientes()
    {
        // echo 'Estas en el metodo para recuperar todos los clientes desde el servicio';
        // echo 'SERVICIO';
        // print_r($this->clientesModel->getAll());
        return $this->clientesModel->getAll();
    }

    public function borrarCliente($dni)
    {
        return $this->clientesModel->borrar($dni);
    }
}
