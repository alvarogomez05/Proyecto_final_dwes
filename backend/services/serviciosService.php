<?php
require_once '../database/models/serviciosModel.php';

class ServiciosService
{

    private $serviciosModel;

    public function __construct()
    {

        $this->serviciosModel = new ServiciosModel();
    }



    public function guardarServicio($id, $nombre, $precio)
    {
        return $this->serviciosModel->save($id, $nombre, $precio);
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
}

