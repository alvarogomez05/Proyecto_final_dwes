<?php

require_once __DIR__ . '/../services/empleadosService.php';

class EmpleadosController {
    private $empleadoService;

    public function __construct()
    {
        $this->empleadoService = new EmpleadosService();
    }

    // Método para obtener todos los empleados
    public function getEmpleados()
    {
        return $this->empleadoService->obtenerTodosLosEmpleados();
    }

    // Método para obtener un empleado por su ID
    public function getEmpleadoId($id)
    {
        return $this->empleadoService->obtenerEmpleadoPorId($id);
    }

    // Método para guardar un nuevo empleado
    public function createEmpleado($dni, $email, $password, $rol, $nombre, $apellido1, $apellido2, $calle, $numero, $cp, $poblacion, $provincia, $tlfno, $profesion)
    {
        return $this->empleadoService->guardarEmpleado(
            $dni, $email, $password, $rol, $nombre, 
            $apellido1, $apellido2, $calle, $numero, 
            $cp, $poblacion, $provincia, $tlfno, $profesion
        );
    }

    // Método para borrar un empleado
    public function deleteEmpleado($id)
    {
        return $this->empleadoService->deleteEmpleado($id);
    }
}
