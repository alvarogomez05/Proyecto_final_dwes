<?php
require_once 'database/models/empleadosModel.php';

class EmpleadosService
{

    private $empleadosModel;

    public function __construct()
    {
        $this->empleadosModel = new EmpleadosModel();
    }


    public function guardarEmpleado($id, $nombre, $apellido1, $apellido2, $cargo)
    {
        return $this->empleadosModel->save($id, $nombre, $apellido1, $apellido2, $cargo);
    }

    public function obtenerEmpleadoPorId($id)
    {
        return $this->empleadosModel->getEmpleadoById($id);
    }


    public function obtenerTodosLosEmpleados()
    {
        return $this->empleadosModel->getAll();
    }

    public function borrarEmpleado($id)
    {
        return $this->empleadosModel->borrar($id);
    }
}
