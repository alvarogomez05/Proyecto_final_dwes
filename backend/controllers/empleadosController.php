<?php

require_once __DIR__ . '/../services/empleadosService.php';

class EmpleadosController{
    private $empleadoService;
    public function __construct()
    {
      $this->empleadoService=new EmpleadosService();
    }

    public function getEmpleados(){
        return $this->empleadoService->obtenerTodosLosEmpleados();
    }

    public function getEmpleadoId($id){
        return $this->empleadoService->obtenerEmpleadoPorId($id);
    }

    public function guardarEmpleado($id, $nombre, $apellido1, $apellido2, $cargo){
        return $this->empleadoService->guardarEmpleado($id, $nombre, $apellido1, $apellido2, $cargo);
    }

    public function borrarEmpleado($id){
         return $this->empleadoService->borrarEmpleado($id);
    }
}
