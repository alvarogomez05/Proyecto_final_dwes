<?php
require_once 'database/models/serviciosModel.php';

class ServiciosService
{

    private $serviciosModel;

    public function __construct()
    {

        $this->serviciosModel = new ServiciosModel();
    }


    public function guardarServicio($id, $nombre, $precio, $descripcion)
    {
        return $this->serviciosModel->save($id, $nombre, $precio, $descripcion);
    }

    public function obtenerServicioPorId($id)
    {

        return $this->serviciosModel->getServicioById($id);
    }


    public function obtenerTodosLosServicios()
    {
        return $this->serviciosModel->getAll();
    }

    public function borrarServicio($id)
    {
        return $this->serviciosModel->borrar($id);
    }

    public function cambiarPrecioServicio($id , $nuevoPrecio)
    {
        return $this->serviciosModel->cambiarPrecioServicio($id, $nuevoPrecio);
    }
}

